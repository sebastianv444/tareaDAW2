const carrito = [
    {nombre: 'monitor 45 pulgadas', precio: 500},
    {nombre: 'cafetera' , precio: 50},
    {nombre: 'Doom', precio: 40},
    {nombre: 'disco ssd 500 GB' , precio: 90},
    {nombre: 'olla exprés', precio: 100}
];

for(let i = 0; i<carrito.length;i++){
    /* console.log(`${carrito[i].nombre} - ${carrito[i].precio}`) */
}

// usando foreach, no necesita índice.
// el forEach se usa en arrays.
carrito.forEach((producto)=>{
    console.log(`${producto.nombre} - ${producto-precio}`);
});