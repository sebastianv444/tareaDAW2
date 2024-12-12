const fs = require('node:fs/promises');

// https://www.geeksforgeeks.org/node-js-fs-readdir-method/
// OJO: en los callbacks se pone en el primer parametro la variable error para controlar los errores
// primer parametro.
fs.readdir('.',(err,ficheros)=>{
    if(err){
        console.log('error al leer el directorio ',err);
        return;
    }else{
        ficheros.forEach(fi => {
            console.log(fi);
        });
    }
});
