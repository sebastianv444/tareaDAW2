const carrito = [
    {nombre: 'monitor 45 pulgadas', precio: 500},
    {nombre: 'cafetera' , precio: 50},
    {nombre: 'Doom', precio: 40},
    {nombre: 'disco ssd 500 GB' , precio: 90},
    {nombre: 'olla exprés', precio: 100}
];

let resultado;

function esMayor (objeto){
    return objeto.precio > 60;
};

/* filter solo me devuelve solo los objetos que cumplan la condicion pasada con el filter y se almacena en resultado. */
resultado = carrito.filter(esMayor);
console.log(resultado)

//esta es la mejor forma ymas resumida con function arrow.
resultado = carrito.filter((producto) => producto.precio > 60);
console.log(resultado);