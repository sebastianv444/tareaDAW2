//objeto constructor

function Persona(nombre, apellidos, edad){
    this.nombre = nombre;
    this.apellidos = apellidos;
    this.edad = edad;
    
}

let persona1 = new Persona("ana","García", 19);
let persona2 = new Persona("Manolo", "Pérez", 29);

console.log(persona1);
console.log(persona2);