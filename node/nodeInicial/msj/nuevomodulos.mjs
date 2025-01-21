/* 
    .js -> POR DEFECTO UTILIZA CommonJS
    .mjs -> PARA UTILIZAR ES Modules (oficial de Node)
    .cjs -> PARA UTILIZAR CommonJS
*/
/* IMPORTANTE!!: si vamos a usar Modules para traerte cosas con el import,
tienes que nombrar los archivo donde estes trabajando con el .mjs. de lo contrario,
dara errores.Tambien, es importante poner el mjs en el from. */
//COMO USAR MODULES.
import { restar,multiplicar } from "./restar.mjs";

console.log(restar(5,7));
console.log(multiplicar(5,6));