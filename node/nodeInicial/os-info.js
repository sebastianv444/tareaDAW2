//el nombre de la variable tiene que ser el de la libreria que vas a traer;
//para traerte algo SIEMPRE!! va primero "node:" en require;
//esta libreria OS es para manejar nuestro sistema operativo.
const os = require('node:os');

console.log('información del sistema operativo');
console.log('--------------------------------------');
console.log('Nombre del sistema operativo: ', os.platform());
console.log('Versión del sistema operativo: ',os.release());
console.log('Arquitectura: ',os.arch());
console.log('CPUs: ', os.cpus());
console.log('Memoria libre: ',os.freemem());
console.log('Memoria total: ',os.totalmem());
console.log('Lleva encendido: ',os.uptime() /60/60);