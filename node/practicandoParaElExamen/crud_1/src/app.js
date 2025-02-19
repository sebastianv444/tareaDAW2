const express = require('express');
const config = require('./config/dotenv');
const morgan = require('morgan');
const path = require('path');
const app = express();

const alumnos = require('./routes/alumno');
const profesores = require('./routes/profesor');

// configuracion
app.set('port', config.app.port);
app.set('view engine', 'ejs');
app.set('views',path.join(__dirname,'views'))

// middleware
app.use(express.urlencoded({ extended: true }));
app.use(morgan("dev"));

// rutas
app.use(alumnos);
app.use(profesores);

module.exports = app;