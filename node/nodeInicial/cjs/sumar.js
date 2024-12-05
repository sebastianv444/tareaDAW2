function suma(x,y){
    return x+y;
};

const PI = 3.141592;

/* OJO:tienes que exportar la funcion que vayas a usar en otra pagina, ya que 
de lo contrario si no lo exportas no podras usarlo en otra pagina y habra un error
al ejecutar el archivo con node */
/* module.exports = suma; */

/* si queremos obligar a que se utilice el mismo nombre 
de la funion donde la importemos lo hacemos así:*/

module.exports = {
    PI,suma
}

/* 
    y ahora en el archivo donde la importemos hacemos
    desestructuración:

    const {suma} = require('./suma');
*/