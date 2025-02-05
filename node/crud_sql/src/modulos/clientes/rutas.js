const express = require('express');
const respuestas = require('../../red/respuestas');
const controlador = require('./clientesController');

// obetenemos el router para un sistema de ruteo
/* express.Router() nos ayuda con metodos especificos para simplificar el sistema de las rutas,
a diferencia hacer con express() a pelo. */
const router = express.Router();

router.get('/',(req,res)=>{
    /* res.send('ok todo'); */
    /* respuestas.success(req,res,'todo correcto desde el cliente',200); */
    const todos = controlador.todos().then((resultado)=>{
        respuestas.success(req,res,todos,200);
    });
    
});

module.exports = router;