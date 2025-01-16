import { readFile } from 'node:fs/promises';

// asincronía en paralelo
// esto hace que se ejecuten todas mis promesas y obtengo la respuesta en el then.
Promise.all([
    //una vez terminado de leer todos, presentará el resultado. NO es secuencial
    readFile("./archivo_1.txt","utf-8"),
    readFile("./archivo_2.txt","utf-8")

    //en el siguiente then coge las 2 respuestas con el ([]) te los pilla en orden del llamado.
]).then(([texto1,texto2]) => {
    console.log("primer texto: ", texto1);
    console.log("segundo texto: ", texto2);
});

console.log("¿esto cuándo se ejecuta?");
