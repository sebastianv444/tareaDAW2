// import.mjs
import * as operaciones from "./exportEsModule.mjs";

const suma = operaciones.sumar(1, 2);
const resta = operaciones.restar(5, 3);

console.log(`El resultado de la suma es: ${suma}`); // 3
console.log(`El resultado de la resta es: ${resta}`); // 2

// importar solo algunas cosas en especifico:

import { multiplicar,dividir } from "./exportEsModule.mjs";

console.log(`el resultado de tu multiplicacion es: ${multiplicar(5,5)}`);
console.log(`el resultado de tu division es: ${dividir(144,12)}`);