let AWS = require('aws-sdk');
let ses = new AWS.SES();

let RECEIVER = 'rileyschoppa@yahoo.com';
let SENDER = 'contact@rileystech.com';

exports.handler = async function (event, context) {
    console.log('Received event:', event);

    if(event.isBase64Encoded) {
        event.body = Buffer.from(event.body, 'base64').toString();
        event.isBase64Encoded = false
    }

    try {
        event.body = JSON.parse(event.body)
    } catch (e) {
        console.error(e)
        console.error(event.body.substring(0,50))
        return JSON.stringify([{param: 'Unknown', msg: 'error has occurred. (22)'}])
    }

    let params = {}

    for(let i in event.body)
        params[event.body[i]['name']] = event.body[i]['value']

    let errors = validation(params)

    if(errors.length !== 0)
        return JSON.stringify({ errors: errors })

    // return JSON.stringify({ errors: [], success: true })

    try {
        await sendEmail(params);
    } catch (e) {
        console.log(e)
        errors.push({ param: 'Sending email', msg: 'failed' })
    }

    if(errors.length !== 0)
        return JSON.stringify({ errors: errors })

    return JSON.stringify({ errors: [], success: true })

};

function validation(params) {
    let errors = []

    if(!('name' in params))
        errors.push({ param: 'name', msg: 'is required'})
    if(!('email' in params))
        errors.push({ param: 'email', msg: 'is required'})
    if(!('message' in params))
        errors.push({ param: 'message', msg: 'is required'})

    if(errors.length !== 0)
        return errors

    if(params['name'].length === 0 || params['name'].length > 256)
        errors.push({ param: 'name', msg: 'must be between 1 and 256 characters'})
    if(params['email'].length === 0 || params['email'].length > 256)
        errors.push({ param: 'email', msg: 'must be between 1 and 256 characters'})
    if(params['message'].length === 0 || params['message'].length > 4096)
        errors.push({ param: 'message', msg: 'must be between 1 and 4096 characters'})

    return errors
}

function sendEmail (data) {
    data['date'] = `${(new Date()).getMonth() + 1}/${(new Date()).getDate()}/${(new Date()).getFullYear()}`
    console.log(data)
    let params = {
        Destination: {
            ToAddresses: [
                RECEIVER
            ]
        },
        Source: SENDER,
        Template: 'rileystech-contact-form',
        TemplateData: JSON.stringify(data),
        ReplyToAddresses: [
            'do-not-reply@rileystech.com'
        ],
    };

    return ses.sendTemplatedEmail(params).promise();
}