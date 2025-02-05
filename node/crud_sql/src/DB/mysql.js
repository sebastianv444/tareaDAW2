const mysql = require('mysql');
const config = require('../config');

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

function conexMysql(){
    conexion = mysql.createConnection(dbconfig);

    conexion.connect(err =>{
        if(err){
            console.log('[db error]',err);
            setTimeout(conexMysql, 200);
        }else{
            console.log("¡Conectado a la bbd correctamente!");
            
        }
    })

    conexion.on('error', err => {
        console.log('[db error]',err);
        // a lo que se le compara es un protocolo existente.
        if(err.code === 'PROTOCOL_CONNECTION_LOST'){
            // aqui lo que hace es reconectarte en caso se haya perdido la conexión.
            conexMysql();
        }else{
            throw err;
        }
    })
}

//llamamos a la conexion:
conexMysql();

function todos(tabla){
    // return prueba;
    return new Promise((resolve,reject)=>{
        conexion.query(`SELECT * FROM ${tabla}`,(error,resultado)=>{
            if(error) return reject(error);
            resolve(resultado);
            // return error ? reject(error) : resolve (resultado);
        });
    });
}

function devolverUno(tabla,id){

}

function agregar(tabla,datos){

}

function borrar(tabla,id){

}

module.exports = {
    todos,
    devolverUno,
    agregar,
    borrar
}