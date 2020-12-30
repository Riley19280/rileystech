require('dotenv').config()

const fs = require('fs-extra')
let http = require('http');
let https = require('https');
const md5 = require('md5')


// Check for .env file
// if(!fs.readdirSync('.').includes('.env')) {
//     console.error(`.env file not found`)
//     return
// }

const express = require('express');
const bodyParser = require('body-parser')
const fileUpload = require('express-fileupload');

const database = require('./database')

const app = express();

app.set('view engine', 'ejs');
app.use(bodyParser.urlencoded({ extended: true }));
app.use(fileUpload({ limits: { fileSize: 3 * 1024 * 1024 },} ));

app.use("/assets", express.static(__dirname + "/assets"));
app.use("/public", express.static(__dirname + "/public"));

app.listen(process.env.PORT, () => {
    console.log(`[${(new Date()).toISOString()}] Application running on port ${process.env.PORT}`)
})

fs.readdirSync('./public/root/').forEach(function (file) {
    if (file[0] === '.') return
    app.get(`/${file}`, (req, res) => res.sendFile(`./public/root/${file}`, {root: '.'}));
})

app.get('/', (req, res) => {
    res.render('index', {})
})

app.get('/projects', (req, res) => {
    res.render('projects', { projects: fs.readJsonSync('./projects.json') })
})

app.get('/about', (req, res) => {
    res.render('about', {})
})

app.get('/contact', (req, res) => {
    res.render('contact', {})
})


app.get('/error', (req, res) => {
    res.render('error', {})
})

