const nodemailer = require('nodemailer');

const transporter = nodemailer.createTransport({
    service: 'gmail',
    auth: {
        user: 'ryan.guilherme.740@gmail.com',
        pass: 'stressedout123'
    }
});

module.exports = transporter;