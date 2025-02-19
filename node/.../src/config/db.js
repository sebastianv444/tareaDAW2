const config = require('./dotenv');
const mysql = require('mysql');

const conexion = mysql.createConnection({
    host: config.mysql.host,
    user: config.mysql.user,
    password: config.mysql.password,
    database: config.mysql.database
});

conexion.connect((err) => {
    if(err){
        console.error("Error al conectarte a la base de datos", err.stack);
    }else{
        console.log("conectado a la base de datos");
    }
})

module.exports = conexion;