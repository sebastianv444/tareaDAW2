const express = require("express");
/* esto es lo que nos da facilidades con las rutas para luego usarlas en app.js y que 
este mejor modularizado. */
const router = express.Router();
const clientesController = require('../controllers/clientesController');

// aquí definiremos las rutas
router.get('/',clientesController.listar);
router.get("/add", clientesController.guardar);
router.get('/borrar/:id',clientesController.borrar);

module.exports = router;