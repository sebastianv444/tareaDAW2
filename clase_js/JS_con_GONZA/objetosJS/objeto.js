const nombre = "monitor de 50 pulgadas";
const precio = 400;
const disponible = true;

//un objeto agrupa todo en una sola variable

const producto = {
    nombre: "monitor de 50 pulgadas",
    precio: 400,
    disponible: true
}

console.log(producto.precio);
console.log(producto['precio']);

//agregar propiedades al objeto:
//los objetos en js son modificables por mas que sean constantes.
producto.imagen = "mi_imagen.jpg";

console.log(producto);

//eliminar propiedades de un objeto:

delete producto.imagen;
console.log(producto);