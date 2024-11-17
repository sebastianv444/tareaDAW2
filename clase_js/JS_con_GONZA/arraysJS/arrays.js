const numeros = [1,2,3,4];

console.table(numeros);

const meses = new Array('enero', 'febrero', 'marzo');

//un array puede contener cualquier contenido.

const cosas = ["pan", 4, true, {nombre: 'sebastian'}, [23,45]];

console.log(cosas);

const multidimension = [
    [10,20,40],
    [4,78,89,67]    
];

console.log(multidimension[0][2]);

for(let i = 0; i < meses.length; i++){
    console.log(meses[i]);
}

//agregar elementos al final del array.
meses.push('otro mes');
/* console.log(meses); */

// agregar al principio del array.
meses.unshift('aqui un mes al principio')

console.log(meses);

//spread operator o Rest operator

let resultado;

const carrito = [];

const producto = {
    nombre: 'teclado',
    precio: 5
};

carrito.push(producto)

const producto2 = {
    nombre: 'televison',
    precio: 345
};

// insetamos al final del array resultado el producto2.
resultado = [...carrito,producto2];
/* console.log(resultado); */

//insetamos al principio del array resultado el producto2
resultado = [producto2,...carrito];
/* console.log(resultado); */



//ELIMINAR CONTENIDO DEL ARRAY.

//metodo pop() elimina el ultimo valor del array;
/* console.log(meses); */
meses.pop();
/* console.log(meses); */

//metodo shift() elmina el primero valor del array;
meses.shift();

//eliminar elemento en una posicion especifica con un metodo splice.

//posición desde donde deseo cortar, cantidad de elementos a cortar:
console.log(`el array números: ${numeros}`);
let cortado = numeros.splice(1,1);

console.log(`el array números CORTADO: ${numeros}`);