const altoPantalla = window.innerHeight;
const div = document.querySelector("#caja");
let i = 0;
let direccion = 1;
let intervalo;
let velocidad = 180;
let x = 30;

function proceso() {
  clearInterval(intervalo);
  intervalo = setInterval(() => {
    i += x * direccion;
    div.style.top = `${i}px`;
    if (i + div.clientHeight > altoPantalla || i < 0) {
      direccion *= -1;
      console.log("paso por el if");
    }
    console.log(i);
  }, velocidad);
}

function acelerar() {
  x += 30 ;
  proceso(x);
}

function frenar() {
  x -= 30;
  proceso(x);
}

function cambiarDireccion() {
  direccion *= -1;
  proceso();
}

document.querySelector("#acelerar").addEventListener("click", acelerar);
document.querySelector("#frenar").addEventListener("click", frenar);
document
  .querySelector("#cambiarDireccion")
  .addEventListener("click", cambiarDireccion);

proceso();
