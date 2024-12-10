//AQUI USAREMOS CALLBACKS, YA QUE EN ALGUNAS EMPRESAS LA SIGUEN USANO Y NO ESTA MAL VERLAS.
const fs = require('node:fs');

//vamos a utilizar asincronía para leer el archivo, usamos para ello la función
//readFile

console.log("leyendo el primer archivo....")

/* vamos a usarlo con callbacks, la tercera opcion del readFile es el callback */
fs.readFile('./archivo_1.txt', 'utf-8', (err,text)=>{
    console.log(text);
});

console.log("HACIENDO COSAS MIENTRAS SE LEE el archivo");

console.log("leyendo el SEGUNDO archivo...");

fs.readFile('./archivo_2.txt','utf-8', (err,texto)=>{
    console.log(texto);
})