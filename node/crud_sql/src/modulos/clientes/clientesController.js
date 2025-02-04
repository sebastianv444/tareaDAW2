const db = require('../../DB/mysql');

const TABLA = 'clientes';

/* El controlador accede a los resultados de las consultas sobre la base de datos, será el 
intermediario entre la vista(rutas) y el modelo(mysql.js) donde se realizan las consultas */

function todos(){
    return db.todos(TABLA);
}

module.exports = {
    todos
};