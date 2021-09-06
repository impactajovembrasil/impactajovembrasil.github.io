const express = require('express');
const router = express.Router();
const {
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
} = require('./src/controllers/controllers');


router.get('/', home);

router.get('/contato', contato);

router.get('/faq', faq);

router.get('/galeria', galeria);

router.get('/membros', membros);

router.get('/newsletter', newsletter);

router.get('/projetos', projetos);

router.get('/sobre', sobre);

router.get('/termos', termos);

router.post('/enviar', mensagem_enviada);

module.exports = router;