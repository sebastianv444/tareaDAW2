const boton = document.querySelector("#boton");
function fecha(){

    boton.addEventListener("click",()=>{
        const fecha1 = new Date(document.querySelector("#fecha1").value);
        const fecha2 = document.querySelector('#fecha2').value;
        
        console.log(fecha1);
    })

}

fecha();