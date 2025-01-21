//es buen practica poner el 'node:' como buenas practicas  
const fs = require('node:fs');

console.log("leyendo el primer archivo...");

//readFileSync trabaja de forma síncrona, esto va de forma secuencial
const texto = fs.readFileSync('./archivo_1.txt', 'utf-8');

console.log(texto);
console.log("vamos a leer el segundo archivo...");

const segundo = fs.readFileSync('./archivo_2.txt', 'utf-8');

console.log(segundo);