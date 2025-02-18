const express = require('express');
const config = require('./config/dotenv');
const morgan = require('morgan');

const app = express();

const alumnos = require('./routes/alumnos');

// configuracion
app.set('port', config.app.port);

// middleware
app.use(express.urlencoded({extended: true}));
app.use(morgan('dev'));

// rutas
app.use(alumnos);