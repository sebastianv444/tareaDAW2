//trabajar con file system
const fs = require('node:js');

/* node es monohilo y puede trabajar de forma síncrona o 
asíncrona con eventos para leer archivos. Si lo hacemos de 
manera síncron bloque el proceso, usamos statSyc para leer archivos
de forma asíncrona. */

const stats = fs.statSync('./archivo_1.txt')

console.log(
    stats.isFile(), // si es un fichero
    stats.isDirectory()
);