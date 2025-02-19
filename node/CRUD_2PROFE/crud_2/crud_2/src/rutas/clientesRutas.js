const express = require('express');
const router = express.Router();
const clientesControler = require('../controllers/clientesController')

// aquí definiremos las rutas
router.get('/',clientesControler.listar  );
router.post('/add', clientesControler.guardar );



module.exports = router;
