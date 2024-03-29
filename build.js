require('dotenv').config()

// https://stackoverflow.com/questions/36737313/how-to-cname-to-amazon-api-gateway-endpoint/45849093#45849093

let fs = require('fs-extra')
let ejs = require('ejs');
const path = require('path')
const child_process = require('child_process')
const AWS = require('aws-sdk');
const BUCKET_NAME = 'rileystech.com';
const s3 = new AWS.S3({
    accessKeyId: process.env.AWS_ACCESS_KEY,
    secretAccessKey: process.env.AWS_SECRET
});

function ejs2html(loc) {
    ejs.renderFile(loc, { projects: fs.readJsonSync('./projects.json') }, {}, function(err, str){
        if(err)
            console.error(err)
        let save = path.join(__dirname, 'dist', loc.replace('.ejs', '.html'))
        fs.ensureFileSync(save)
        fs.writeFileSync(save, str)
    });
}

function read_dirs(loc, endsWith) {
    let valid_files = []
    let files = fs.readdirSync(loc)

    for (let f of files) {
        let p = path.join(loc, f)

        if (fs.lstatSync(p).isDirectory()) {
            let vs = read_dirs(p, endsWith)
            valid_files = valid_files.concat(vs)
        } else if(f.endsWith(endsWith) || endsWith == null) {
            if (f.indexOf('.') === 0) continue
            valid_files.push(p)
        }
    }
    return valid_files
}

function exec_cmd(cmd) {
    return new Promise(async (resolve, reject) => {
        child_process.exec(cmd, (error, stdout, stderr) => {
            if (error) {
                reject(error)
            } else {
                resolve(stdout)
            }
        })
    })
}

const uploadFileAWS = (loc, filename, params) => {
    const fileContent = fs.readFileSync(loc);

    // Setting up S3 upload parameters
    let p = {
        Bucket: BUCKET_NAME,
        Key: filename, // File name you want to save as in S3
        Body: fileContent
    };

    if(params)
        params = Object.assign({}, p, params);
    else
        params = p

    // Uploading files to the bucket
    s3.upload(params, function(err, data) {
        if (err) {
            throw err;
        }
        console.log(`File uploaded successfully. ${data.Location}`);
    });
};

(async () => {

    fs.ensureDirSync('./dist')

    let ejs_files = read_dirs('./views', '.ejs')
    ejs_files = ejs_files.filter( f => fs.readFileSync(f).toString().indexOf('<html>') === 0)

    for (let f of ejs_files) {
        ejs2html(f)
    }

    fs.copySync('./assets', './dist/assets')
    fs.copySync('./public/root', './dist')



    await exec_cmd('npm run tailwind-dist')


    let files = read_dirs('./dist')
    let names = files.map(x => x.replace(/^dist\//, '')).map(x => x.replace(/^views\//, ''))

    for(let i = 0; i < files.length; i++) {
        console.log(files[i], names[i])
        if(files[i].endsWith('.html'))
            uploadFileAWS(files[i], names[i].replace('.html',''), { ContentType: 'text/html; charset=utf-8' })
        else if (files[i].endsWith('.svg'))
            uploadFileAWS(files[i], names[i].replace('.html',''), { ContentType: 'image/svg+xml' })
        else
            uploadFileAWS(files[i], names[i])
    }

})();
