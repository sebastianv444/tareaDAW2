const pantallaAncho = window.innerWidth;
const caja = document.querySelector("#caja");
let velocidad = 50;
let intervalo;
let i = 0;
let direccion = 1;

function animacion() {
  console.log(velocidad);
  clearInterval(intervalo);

  intervalo = setInterval(() => {
    i += 10 * direccion;
    // clientWidth devuelve el ancho del área visible de un elemento
    if (i + caja.clientWidth > pantallaAncho || i < 0) {
      /* revierte el valor a negativo cuando ya llego a la derecha del todo,
      y lo mismo pasa cuando llega a la izquierda del todo y se revierte el valor
      a positivo. */
      direccion *= -1;
    }
    caja.style.left = `${i}px`;
  }, velocidad);
}

function aumentar() {
  /* el Math.max es para añadir un limite a la operacion realizada "de resta-", en este caso
  la velocidad se ira restando de 5 en 5 cada que pulsen el boton, pero como limite
  tiene maximo tiene hasta el 5, y pasado ese numero ya no se podran disminuir mas */
  /* si le hubiese dado min el valor comenzaba en 5, porque comienza con un valoer minimo */
  velocidad = Math.max(5, velocidad - 5);
  animacion();
}

function reducir() {
  velocidad = Math.min(300, velocidad + 5);
  animacion();
}

document.querySelector("#aumentar").addEventListener("click", aumentar);
document.querySelector("#reducir").addEventListener("click", reducir);

animacion();
