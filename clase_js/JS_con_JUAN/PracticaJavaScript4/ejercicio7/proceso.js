const botones = document.querySelectorAll("button");
let intentos = 0;
let secuencia = [];
let jugador = [];
let decision = "";

function pintar() {
  let secuenciaNumero = Math.trunc(Math.random() * 4);

  secuencia.push(botones[secuenciaNumero].dataset.color);

  for (let i = 0; i <= secuencia.length; i++) {
    intentos++;
    setTimeout(() => {
      botones[secuenciaNumero].style.backgroundColor = "white";
    }, 0);
    setTimeout(() => {
      botones[
        secuenciaNumero
      ].style.backgroundColor = `${botones[secuenciaNumero].dataset.color}`;
    }, 200);
  }
}

function iniciar() {
  while (intentos !== -1) {
    pintar();
    botones.forEach((boton) => {
      boton.addEventListener("click", () => {
        jugador.push(boton.dataset.color);
      });
    });
  }
}

document.querySelector(".btnIniciar").addEventListener("click", iniciar);
