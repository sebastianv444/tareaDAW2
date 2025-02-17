const express = require('express');

const respuesta = require('../../red/respuestas');
const controlador = require('./clientesController');

const router = express.Router();

// CON THEN

/* router.get('/',(req, res)=> {
    // res.send('ok todo');
   // respuesta.success(req, res, 'todo correcto desde cliente', 200)
   const todos = controlador.todos().then((resultado)=> {
    respuesta.success(req, res, resultado, 200);
   })   
}) */

   // CON ASYNC - AWAIT 

router.get('/', todos);
router.get('/:id', uno);
    
  async function todos (req, res){   
    try {
        const items =  await controlador.todos();
        respuesta.success(req, res, items, 200);   
    } catch(error) {
        respuesta.error(req, res, error, 500);
    }    
}

async function uno(req, res){   
    try {
        const item =  await controlador.uno(req.params.id);
        respuesta.success(req, res, item, 200);   
    } catch(error) {
        respuesta.error(req, res, error, 500);
    }    
}




module.exports = router;