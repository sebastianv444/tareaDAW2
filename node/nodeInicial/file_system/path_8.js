//libreria para controlar rutas, para que nuestro js funcione bien en windows y linux
const path = require('node:path');

console.log(path.sep);

//unir rutas

const filePath = path.join('documentos','personal','test.txt');
console.log(filePath);

//obtener de una ruta completa el nombre del fichero

const base = path.basename('/tmp/archivos/documentos/imagen.jpg');
console.log(base);

// lo mismo peroquitando la extensíon

const baseSin = path.basename('tmp/archivos/documentos/imagen.jpg','.jpg');
console.log(baseSin);

// obtener la extensión
/* extname solo obtiene la ultima extension, por mas que tenga muchas obtendra solo 
la ultima, en este caso .jpg */
const extension = path.extname('miImagen.png.jpg');
console.log(extension);

