const express = require('express');
const config = require('./config');
const app = express();

// configuracion basica de express
/* estamos estableciendo una variable port con el valor despues de la coma */
app.set('port', config.app.port);

//estamos exportando la app de express con una configuracion.
module.exports = app;