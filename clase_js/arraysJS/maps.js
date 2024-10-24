const carrito = [
    {nombre: 'monitor 45 pulgadas', precio: 500},
    {nombre: 'cafetera' , precio: 50},
    {nombre: 'Doom', precio: 40},
    {nombre: 'disco ssd 500 GB' , precio: 90},
    {nombre: 'olla exprés', precio: 100}
];

// map devuelve un array que lo podemos guardar:
// el map no modifica el array solo sirve para consultar, ademas map retorna y 'forEach' no.
const nuevoArray = carrito.map((producto)=>{
    return `${producto.nombre} - ${producto.precio}`;
});

console.log("esto es el nuevo array: ", nuevoArray);
console.log("esto es el carrito original: ", carrito);