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
}

function todos(tabla){
    return prueba;
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