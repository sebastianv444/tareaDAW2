const fs = require('node:fs/promises');

// para mas info sobre como funciona readdir: 
//https://www.geeksforgeeks.org/node-js-fs-readdir-method/

fs.readdir('.')
    .then((ficheros)=>{
        ficheros.forEach(i => {
            console.log(i);
        });
    }).catch((err)=>{
        console.log('error al leer el directorio ',err);
    })