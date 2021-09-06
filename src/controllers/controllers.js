const transporter  = require("../email");
const express = require('express');
const path = require('path');


const home = (req, res) => {
    res.sendFile(path.resolve(__dirname, '..', '..', 'public', 'views', 'index.html'));
}

const contato = (req, res) => {
    res.sendFile(path.resolve(__dirname, '..', '..', 'public', 'views', 'contato.html'));
}

const faq = (req, res) => {
    res.sendFile(path.resolve(__dirname, '..', '..', 'public', 'views', 'faq.html'));
}

const galeria = (req, res) => {
    res.sendFile(path.resolve(__dirname, '..', '..', 'public', 'views', 'galeria.html'));
}

const membros = (req, res) => {
    res.sendFile(path.resolve(__dirname, '..', '..', 'public', 'views', 'membros.html'));
}

const newsletter = (req, res) => {
    res.sendFile(path.resolve(__dirname, '..', '..', 'public', 'views', 'newsletter.html'));
}

const projetos = (req, res) => {
    res.sendFile(path.resolve(__dirname, '..', '..', 'public', 'views', 'projetos.html'));
}

const sobre = (req, res) => {
    res.sendFile(path.resolve(__dirname, '..', '..', 'public', 'views', 'sobre.html'));
}

const termos = (req, res) => {
    res.sendFile(path.resolve(__dirname, '..', '..', 'public', 'views', 'termos.html'));
}

const mensagem_enviada = (req, res) => {
    const user = 'ryan.guilherme.740@gmail.com';

    transporter.sendMail({
            from: `${req.body.nome} <${user}>`,
            to: user,
            replyTo: req.body.email,
            subject: 'assunto IJ',
            text: req.body.mensagem
        })
        .then(info => {
            res.sendFile(path.resolve(__dirname, '..', '..', 'public', 'views', 'mensagem_enviada.html'));
            console.log(info);
        })
        .catch(e => console.log(e));
}

module.exports = {
    home, 
    contato,
    faq,
    galeria,
    membros,
    newsletter,
    projetos,
    sobre,
    termos,
    mensagem_enviada
}

