/* Ahora manejaremos con promesas, para esto tienes que poner '/promises' despues 
de la libreria que importamos. */
const fs = require('node:fs/promises');

//utilizamos promesas en lugar de callbacks

console.log('leyendo el primer archivo');

fs.readFile('./archivo_1.txt','utf-8').then((texto)=>{
    console.log(texto);
});

console.log("esto cuando se lee");

fs.readFile('./archivo_2.txt','utf-8').then((texto)=>{
    console.log(texto);
});