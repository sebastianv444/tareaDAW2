//RECUERDA: usando el map siempre retorna un array.
/* FUNCION PURA: son aquellas que por mas que pase el tiempo no modifica la varible
por fuera de la funcion*/

//MAP()
var miArray = [6,57,8,32];

/* RECUERDA QUE ESTO DEVUELVE UN ARRAY CON LOS VALORES MODIFICADOS.Sin embargo,
no se modifica el array original. */
const nuevoArray = miArray.map(n=>n*3);
console.log(nuevoArray);

//FILTER()
//EL FILTER SOLO RETORNA LOS QUE CUMPLAN LA CONDICION, EN ESTE CASO 6,8 y 32.
let datosFiltradpsPares = miArray.filter(n=>n%2==0);
console.log(datosFiltradpsPares);

//FIND()
//devuelve solo el primer elemento, siempre y cuando se cumpla la condicion.
let encontrado = miArray.find(n => n%2===0);

//EVERY()
/* NOS RETORNA UN VALOR BOOLEANO, SIEMPRE Y CUANDO SE CUMPLA LA 
CONDICON CON TODOS LOS ELEMENTOS DEL ARRAY. */ 
let every = miArray.every(n=>n%2===0)
console.log(every)//retorna un false.

//SOME()
/* NOS RETORNA UN VALOR BOOLEANO, SIEMPRE Y CUANDO CUALQUIER ELEMENTO CUMPLE
LA CONDICION ESPECIFICADA */
let some = miArray.every(n=>n%2===0);
console.log(some);//RETORNA UN TRUE