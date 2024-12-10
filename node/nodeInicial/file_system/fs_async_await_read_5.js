/* usamos el desestructuryng para obetner algo en especifico de la libreria */
const { readFile } = require('node:fs/promises');

// usamos ahora async/await
/*  en CommonJS NO se puede hacer top-level await, es , usar unicamente await 
sin la palabra reservada async*/

// async secuencial, no bloquea.
/* 
    Existen:
    - Sincrono
    - asíncrono secuencial
    - asíc¡ncrono en paralelo
*/


//esta siguiente estructura es asíncronia secuencial.
/* async function iniciar() {
    console.log("iniciando la funcion");
    
    const primero = await readFile('./archivo_1.txt', 'utf-8');

    console.log('primer texto: ',primero);

    console.log("hacer más cosas");

    const segundo = await readFile('./archivo_2.txt','utf-8');

    console.log('SEGUNDO texto: ', segundo);
}

iniciar(); */

/* la siguiente forma es mas resumida para que se ejecute la funcion asyncrona nada mas 
acabada la funcion, es util para ejecutar alguna funcion una vez y luego olvidarte de esto */
// IIFE Inmediatly Invoked Function Expression:
(async ()=> {
    console.log("iniciando la funcion");
    
    const primero = await readFile('./archivo_1.txt', 'utf-8');

    console.log('primer texto: ',primero);

    console.log("hacer más cosas");

    const segundo = await readFile('./archivo_2.txt','utf-8');

    console.log('SEGUNDO texto: ', segundo);
}
)();