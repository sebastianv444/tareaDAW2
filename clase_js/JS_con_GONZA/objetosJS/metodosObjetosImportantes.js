const mapa = {
  123456: "Primera observación",
  789012: "Segunda observación",
  345678: "Tercera observación",
};

//forma de recorrer y modificar objetos.
Object.entries(mapa).forEach(([clave, valor]) => {
  console.log(`Clave: ${clave}, Valor: ${valor}`);
});
//modificar
Object.entries(mapa).forEach(([clave, valor]) => {
  mapa[clave] = valor + " (Modificado)";
});

//Filtrar claves o valores:
const filtrado = Object.entries(mapa)
  .filter(([clave, valor]) => clave.startsWith("1")) // Filtrar claves que empiezan con '1'
  .map(([clave, valor]) => ({ clave, valor })); // Convertir a array de objetos

console.log(filtrado);

/* el for...of es adecuado para manipular elementos si estás trabajando con estructuras 
iterables (como arrays, cadenas, Map, Set, etc.), tambien puedes recorrer y manipular 
objetos con for of. El for...of no se usa directamente para iterar objetos, porque no son iterables. 
Pero si usas Object.entries(objeto), sí puedes recorrer y manipular los valores */
//forma de recorrer y modificar objetos mas sencilla:
/* DATO: si alguna vez solo quieres iterar en la clave no pongas ',valor', pero si quieres
solo iterar en valores solo usa '[,valor]' */
for (const [clave, valor] of Object.entries(mapa)) {
    console.log(`Clave: ${clave}, Valor: ${valor}`);
}

/* RECUERDA!!!:no es lo mismo heredar que tener propiedades propias en un objeto, ya que 
si el objeto tiene sus propias propiedades y, tu luego le asignas a este objeto que va a tener
propiedades heredadas de otro objeto, en un buclu for in te recorre absolutamente todo 
incluyendo las propiedades heredadas por otro objeto y tendrias que filtrarlas con hasOwnProperty.
Sin embargo, con el bucle for...of cuando pasas un objeto en forma iterable para este for
con el Object.entries solo toma las propiedades propias no las heredadas */