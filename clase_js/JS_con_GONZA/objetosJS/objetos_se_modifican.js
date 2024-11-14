/* esta propiedad nos ayuda a ser mas stricto con el codigo, por ejemplo nos saltaria un error si preguntamos por consola por una variable que al crearla no usamos var ni let, pues esto nos saltaria un error por consola. */
'use strict';

const producto = {
    nombre: "television 100 pulgadas",
    precio: 450,
    disponibilidad: true
};

producto.disponibilidad = "asdsadsad";

delete producto.precio;

console.log(producto);

//congelar un objeto: no se puede borrar, modificar ni agregar propiedades:

/* Object.freeze(producto) */

//delete producto.nombre (esto da error, ya que el objeto esta congelado)
// producto.color = "rojo" (esto da error, ya que el objeto esta congelado)

//el isFrozen nos da un valor booleano depende de si esta congelado o no.
console.log(Object.isFrozen(producto));

/* 
    SELLAR OBJETOS
    seal
    No premite borrar ni agregar propiedadre PERO si 
    modificar las existentes.
*/

Object.seal(producto);

producto.nombre = "juanito";
console.log(producto)