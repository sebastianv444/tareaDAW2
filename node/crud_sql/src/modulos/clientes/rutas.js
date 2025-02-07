const express = require("express");
const respuestas = require("../../red/respuestas");
const controlador = require("./clientesController");

// obetenemos el router para un sistema de ruteo
/* express.Router() nos ayuda con metodos especificos para simplificar el sistema de las rutas,
a diferencia hacer con express() a pelo. */
const router = express.Router();

// con then()
/* router.get('/',(req,res)=>{
    const todos = controlador.todos().then((resultado)=>{
        respuestas.success(req,res,resultado,200);
    });
}); */

// con async - await
router.get("/", todos);
router.get("/:id", uno);

async function todos(req, res) {
  try {
    const items = await controlador.todos();
    respuestas.success(req, res, items, 200);
  } catch (error) {
    respuestas.error(req, res, error, 500);
  }
}

async function uno(req, res) {
  try {
    const item = await controlador.uno(req.params.id);
    respuestas.success(req, res, item, 200);
  } catch (error) {
    respuestas.error(req, res, error, 500);
  }
}

/* aquí usamos un put es para actualizar, pero tambien podemos quitar el resultado anterior asi eliminandolo
y remplazando. */
async function eliminar(req, res) {
  try {
    const item = await controlador.eliminar(req.body);
    respuestas.success(req, res, "Item eliminado correctamente", 200);
  } catch (error) {
    respuestas.error(req, res, error, 500);
  }
}

module.exports = router;