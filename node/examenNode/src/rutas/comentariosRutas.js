const express = require('express');
const router = express.Router();
const comentariosController = require('../controllers/comentariosController'); 

router.post('/crearComentarios',comentariosController.crearComentario);

router.get('/comentarios',comentariosController.mostrarComentario);

router.get('/listarComentarios',comentariosController.listarComentarios)

module.exports = router;