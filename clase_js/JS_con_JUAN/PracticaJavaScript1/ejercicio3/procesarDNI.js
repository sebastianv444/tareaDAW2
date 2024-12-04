document.querySelector("button").addEventListener("click",()=>{
    let p = document.querySelector("#mostrar");
    const input = document.querySelector("#DNI").value;

    if(input.length > 9 || input.length < 9){
        p.textContent = "INGRESA BIEN TU DNI"
        p.style.color = "red"; 
    }else{
        p.textContent = "";
    }

});