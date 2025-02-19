const express = require('express');
const app = express();
const morgan = require('morgan');
const path = require('path');
const cors = require('cors');
const mysql = require('mysql');
const myConnection = require('express-myconnection');

// importamos las rutas de clientes
const clientesRutas = require('./rutas/clientesRutas');
const comentariosRutas = require('./rutas/comentariosRutas');

// SETTINGS - CONFIGURACIONES
app.set('port', process.env.PORT || 3000);
app.set('view engine', 'ejs');
app.set('views', path.join(__dirname, 'views'));

// MIDDLEWARE 
// los middleware registran las peticiones que llegan antes de procesarlas
app.use(morgan('dev'));
app.use(cors()); // habilitamos cors para todas las rutas
 app.use(
    myConnection(
        mysql,
        {
            host: 'localhost',
            user: 'root',
            password:'',
            port: 3306,
            database: 'crud_node'
        },
        'single'
    )
); 
app.use(express.urlencoded({extended: false}));

// RUTAS 

app.use('/', clientesRutas);
app.use(comentariosRutas);

// ficheros estatáticos: 
app.use(express.static(path.join(__dirname, 'publics')))

app.listen(app.get('port'), ()=> {
    console.log('escuchando por el puerto 3000');
});
