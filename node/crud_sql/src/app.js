const express = require('express');
const config = require('./config');
const morgan = require('morgan');

const clientes = require('./modulos/clientes/rutas');

const app = express();

app.use(morgan('dev'));
app.use(express.json());
/* el urlencoded {extended:true} por si vienen un array de string o otra cosa 
para pasarlo a json */
app.use(express.urlencoded({extended: true}))

// configuracion basica de express
/* estamos estableciendo una variable port con el valor despues de la coma */
app.set('port', config.app.port);

/* que se utiliza para definir funciones de middleware que se ejecutan para cada solicitud 
realizada a la aplicación. */
/* despues de /api/clientes se ejecuta y se concatena con el get con el parametro "/" 
el que le pusimos en el archivo de rutas.js */
app.use('/api/clientes/',clientes);

//estamos exportando la app de express con una configuracion.
module.exports = app;