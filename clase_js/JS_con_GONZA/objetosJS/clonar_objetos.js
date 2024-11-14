'use strict';

//clonar objetos

const producto = {
    nombre: "television 100 pulgadas",
    precio: 450,
    disponibilidad: true
};

const medidas = {
    peso: "1kg",
    medida: "4m"
}

/* 
    Object.assign();
    Esta función toma como primer argumento el  objeto destino y
    uno o más argumentos como objetos fuente. Copia las 
    propiedades de los objetos fuente en el destino que es el primer argumento pasado.
*/

Object.assign(producto, medidas)

console.log(producto);

//en un objeto vacio meto medidas que se guarda todo esto en la variable resultado.
let resultado = Object.assign({}, medidas);

console.log(resultado);

/* 
    copiar con operador spread operator o rest Operator
*/

const cosa ={
    una: "uno",
    dos: "dos",
    tres: {
        tresbis: "tres"
    }
}

//guardamos con el operador spread(...) todas sus propiedades como objeto a la constante asginada.
const resultado_2 = {...producto, ...medidas,cosa};

console.log(resultado_2.cosa.tres.tresbis);

const original = [1,2,3,4];

const clonado = [...original];
console.log("el clonado ", clonado)