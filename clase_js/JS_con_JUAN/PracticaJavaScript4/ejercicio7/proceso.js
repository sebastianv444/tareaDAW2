const botones = document.querySelectorAll("button:not(.btnIniciar)");
const botonIniciar = document.querySelector(".btnIniciar");

let secuencia = [];
let jugador = [];
let nivel = 0;
let turnoJugador = false;

function generarSecuencia() {
  let indice = Math.floor(Math.random() * 4);
  secuencia.push(botones[indice].dataset.color);
  mostrarSecuencia();
}

function mostrarSecuencia() {
  turnoJugador = false;
  jugador = [];

  secuencia.forEach((color, index) => {
    setTimeout(() => {
      // selecciona el primer elemento que coincida con el selector CSS dentro del documento.
      let boton = document.querySelector(`[data-color="${color}"]`);
      boton.style.backgroundColor = "white";
      setTimeout(() => {
        boton.style.backgroundColor = color;
      }, 400);
    }, index * 800);
  });

  setTimeout(() => {
    turnoJugador = true;
  }, secuencia.length * 800);
}

function manejarClick(event) {
  if (!turnoJugador) return;

  // el event.target representa el elemento html que fue clickado.
  let colorSeleccionado = event.target.dataset.color;
  jugador.push(colorSeleccionado);

  let indice = jugador.length - 1;
  if (jugador[indice] !== secuencia[indice]) {
    alert("¡Perdiste! La secuencia era: " + secuencia.join(", "));
    reiniciarJuego();
    return;
  }

  if (jugador.length === secuencia.length) {
    setTimeout(() => {
      nivel++;
      generarSecuencia();
    }, 1000);
  }
}

function reiniciarJuego() {
  secuencia = [];
  jugador = [];
  nivel = 0;
  turnoJugador = false;
}

function iniciarJuego() {
  reiniciarJuego();
  generarSecuencia();
}

botones.forEach((boton) => {
  boton.addEventListener("click", manejarClick);
});

botonIniciar.addEventListener("click", iniciarJuego);