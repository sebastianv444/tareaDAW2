// commonJs
//https://lenguajejs.com/nodejs/fundamentos/commonjs-vs-esm/
/* para usar un archivo de fuera: */
const { PI,suma } = require('./sumar')

console.log(PI);
console.log(suma(5,4));