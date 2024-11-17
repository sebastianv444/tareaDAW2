let persona = {
    nombre: 'Ana',
    edad: 25,
    ciudad: 'Madrid',
    'pais residencia': 'España'
}
//FORMAS DE ACCEDER A LAS PROPIEDADES DEL OBJETO:
console.log(persona.nombre);
console.log(persona['pais residencia']);

//CAMBIAR EL VALOR DE UNA PROPIEDAD DE UN OBJETO:
persona.edad = 26;

//RECORRER UN OBJETO CLAVE VALOR:
for(let clave in persona){
    console.log(`${clave} : ${persona[clave]}`)
};

//AGREGAR UNA PROPIEDAD A UN OBJETO:
persona.coche = true;

persona.presentarse = function (){
    console.log(this.ciudad, this.coche);
};

persona.presentarse();

//OBJETOS ANIDADOS: AGREGAR UN OBJETO A UN OBJETO COMO PROPIEDAD.
persona.direccion = {
    calle: 'avenida del agua',
    numero: 56,
    cp: 28034
};

console.log(persona.direccion.calle)

//ESTRUCTURING:
//esto crea constantes independientes con el valor de una propiedad del objeto persona.
const {nombre,coche,ciudad,direccion:{calle}} = persona;

//foreach vs map

miArray = [3,4,56,7,8];

//recorrer con forEach.
miArray.forEach(element => {
    console.log(element)
});

//recorrer con map.
let otroArray = miArray.map((e)=>{
    e*6;
});

//filter