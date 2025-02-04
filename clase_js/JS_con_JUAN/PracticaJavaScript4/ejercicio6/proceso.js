const botones = document.querySelectorAll("button");
const botonGanador = Math.trunc(Math.random() * botones.length); 
botones[botonGanador].dataset.ganador = "true";
console.log("el boton ganador es", botones[botonGanador]);

botones.forEach(boton => {
    
});