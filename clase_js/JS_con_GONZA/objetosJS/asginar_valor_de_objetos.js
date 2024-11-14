const producto = {
    nombre: "monitor de 50 pulgadas",
    precio: 400,
    disponible: true
};

// asignar el valor de una propiedad a un valor de la manera "tradicional"
//version antigua para agregar.
const precioNuevo = producto.precio;

//version nueva para agregar.
//object destructuring.
/* con esto obtenmos la propiedad de un objeto la convertimos en una variable 
para poder usarla a nuestro antojo. */
const { precio } = producto;
console.log(precio);

let { nombre, disponible } = producto;
console.log(nombre, disponible);

// arrays destructuring

let a, b, rest;

[a,b] = [10,20];
console.log(a);

/* rest toma el valor de lo restante no obtenido por otras variables. Recuerda que es 
necesario poner los 3 puntos seguido del nombre de la variale. */
//spread operator:
[a, b, ...rest] = [10,34,67,87];
console.log();