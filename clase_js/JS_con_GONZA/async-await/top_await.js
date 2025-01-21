// top-level-await

/*  en módulos en ECMAScript modernos podemos usar await 
directamente en el nivel superior sin necesidad de envolverlo
en una funcion asyncrona*/

const prueba = await fetch('https://jsonplaceholder.typicode.com/todos/1');
console.log(prueba);