const express = require('express');
const respuestas = require('../../red/respuestas');

// obetenemos el router para un sistema de ruteo
/* express.Router() nos ayuda con metodos especificos para simplificar el sistema de las rutas,
a diferencia hacer con express() a pelo. */
const router = express.Router();

router.get('/',(req,res)=>{
    res.send('ok todo');
});

module.exports = router;