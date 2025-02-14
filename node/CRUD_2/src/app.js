/* 
    OJO!!: por lo general el proyecto se divide en varias partes para que se mas legible
    como en el proyecto de "crud_sql".
*/

const express = require("express");
const app = express();
const morgan = require("morgan");
const path = require("path");
// el cors es un middlewere, ya que queremos que se ejecute antes que todo lo demas.
const cors = require("cors");
const mysql = require("mysql");
// esto es de la dependecia de express-myconection
const myConnection = require("express-myconnection");
const clientesRutas = require('./rutas/clientesRutas');
const exp = require("constants");

/* SETTINGS - CONFIGURACIONES */
/* RECUERDA!!: ahora lo estamos haciendo a capo, pero por lo general esto se hace en la carpeta
de ./configuraciones y en un archivo .js que luego se importa en la app para que este mejor 
estructurado el codigo. */

app.set("port", process.env.PORT || 3000);
// view engine: sistema de plantillas, es como el .blade de php
app.set("view engine", "ejs");
// el path.join() con sus paranetros nos use toda la ruta asoluta C:/prueba/prueba/views
app.set("views", path.join(__dirname, "views"));
/* SETTINGS - CONFIGURACIONES */

/* MIDDLEWARE */
/* los middleware se ejecutan antes de las rutas; Son como filtros. */
/* los middleware registran las peticiones que llegan antes de proccesarlas. */

app.use(morgan("dev"));
app.use(cors()); // habilitamos cors para todas las rutas
app.use(
  // myConnection es un metodo
  myConnection(
    mysql,
    {
      host: "localhost",
      user: "root",
      password: "",
      port: 3306,
      database: "crud_node",
    },
    // esto es para que no se haga otra instancia de la base de datos.
    "single"
  )
);

/* MIDDLEWARE */

/* RUTAS */
// OJO: las rutas siempre van despues de los middleware.

app.use('/',clientesRutas);

/* app.get('/api/mensaje',(req,res)=>{
    // este res.json es lo que se le envia cuando hacen un fetch a esta api atra vez de esta ruta.
    res.json({
        mensaje: "hola que tal desde node"
    })
}) */

/*  */
app.use(express.urlencoded({extended: false}));

/* RUTAS */
// express.static es para decirle donde nosotros vamos a guardar ficheros estaticos como img, etc..
app.use(express.static(path.join(__dirname, 'publics')));

app.listen(app.get("port"), () => {
  console.log("escuchando por el puerto 3000");
});