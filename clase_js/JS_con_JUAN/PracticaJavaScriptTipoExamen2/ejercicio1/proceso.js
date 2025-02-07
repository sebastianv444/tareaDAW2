const pantallaAncho = window.innerWidth;
const pantallaAlto = window.innerHeight;
const caja = document.querySelector("#caja");

function animacion(){
    let i = 0;

    setInterval(()=>{
        i += 10;
        caja.style.left = `${i}px`;
    },50)
}

animacion();

function aumentar() {

}

function reducir() {

}

document.querySelector("#aumentar").addEventListener("click", aumentar);
document.querySelector("#reducir").addEventListener("click", reducir);
