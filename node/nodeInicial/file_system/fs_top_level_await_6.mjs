import { readFile } from 'node:fs/promises';

//utilizamos ahora TOP LEVEL AWAIT;
//en EcmaScript Module es posible usar await sin una duncíon async

console.log('leyendo el primer archivo...');

const texto = await readFile('./archivo_1.txt','utf-8');

console.log("primer texto: ", texto);

console.log('esto se ejecuta despúes');


const segundotexto = await readFile('./archivo_2.txt','utf-8');

console.log("segundo archivo: ",segundotexto);
