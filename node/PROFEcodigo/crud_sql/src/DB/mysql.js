const mysql = require('mysql');
config = require('../config');

const prueba = {
    id: 2, 
    nombre: 'pepe',
    edad: 43
}

const dbconfig = {
    host: config.mysql.host,
    user: config.mysql.user,
    password: config.mysql.password,
    database: config.mysql.database
}

let conexion;

function conexMysql() {
   conexion = mysql.createConnection(dbconfig);
   

    conexion.connect(err => {
        if(err) {
            console.log('[db error]', err);
            setTimeout(conexMysql, 200)
        }else {
            console.log("¡Conectado a la bbdd correctamente!");
        }
    })

    conexion.on('error', err => {
        console.log('[db error]', err);
        if(err.code === 'PROTOCOL_CONNECTION_LOST') {
            conexMysql();
        }else{
            throw err;
        }
    })
}

// llamamos a la conexión:
conexMysql();


function todos(tabla) {   
   return new Promise((resolve, reject)=> {
       conexion.query(`SELECT * FROM ${tabla}`, (error, resultado) => {
            if(error) return reject(error);
            resolve(resultado);
            // return error ? reject(error) : resolve(error);
       })
   })
}

function devolverUno(tabla, id) {
    return new Promise((resolve, reject)=> {
        conexion.query(`SELECT * FROM ${tabla} WHERE id = ${id}`, (error, resultado) => {
                return error ? reject(error) : resolve(resultado);            
        })
    })
}

function agregar(tabla, datos) {}

function borrar (tabla, id) {}

module.exports = {
    todos,
    devolverUno,
    agregar,
    borrar
}