const express = require('express');
const config = require('./config/dotenv');
const morgan = require('morgan');
const app = express();

// configuracion
app.set('port',config.app.port)

// middleware
app.use();
app.use(morgan('dev'));
// rutas


module.exports = app;