function guardar(){
    const texto = document.querySelector("textarea").textContent.trim();
    localStorage.setItem("texto",texto);
}

function restaurar(){
    const textarea = document.querySelector("textarea");
    if(localStorage.getItem("texto") !== null){
        textarea.value = localStorage.getItem("texto");
    }
}

document.querySelector("textarea").addEventListener("keydown",guardar);
document.querySelector("textarea").addEventListener("keydown",restaurar);