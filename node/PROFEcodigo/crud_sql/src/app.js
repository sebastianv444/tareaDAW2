const express = require('express');
const config = require('./config');
const morgan = require('morgan');

const clientes = require('./modulos/clientes/rutas');


const app = express();

app.use(morgan('dev'))
app.use(express.json())
app.use(express.urlencoded({extended: true}));

// configuración 
app.set('port', config.app.port);

app.use('/api/clientes/', clientes)



module.exports = app;