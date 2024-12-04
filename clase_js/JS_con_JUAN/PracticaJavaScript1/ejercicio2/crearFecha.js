document.querySelector("button").addEventListener("click", ()=>{
    
    let tiempo = document.querySelector("#tiempo");

    let fecha = new Date(2030,11,16); //le pongo 16 por la diferencia de zona horaria
    tiempo.valueAsDate = fecha;

});

