let persona = {
    nombre: "Juan",
    edad: 30,
    profesion: "Desarrolador" 
};

console.log("dame las claves del objeto",
    // si a Object.keys le paso un objeto me da sus claves.
    Object.keys(persona)
);

console.log("dame los valores del objeto",
    // si a Object.values le pasao un objeto me da solo sus valores de las claves
    Object.values(persona)
);

console.log("dame toda la informacion del objeto agrupado en clase y valor",
    // si a Object.entries le paso un objeto me da tanto sus claves como sus valores.
    Object.entries(persona)
);