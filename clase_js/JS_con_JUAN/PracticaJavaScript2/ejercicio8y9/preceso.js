const botones = document.querySelectorAll(".boton");

// el operador spreed es para que te cree lo 18 espacios con undefind en cada posicion.
// eL map es para convertir ese array dandole un valor en cada posicion que va sumandose
// de 1 en 1.
const numeros = [...Array(18)].map((_, i) => i + 1);
/*  repetir 2 veces el operador spreed es para que se expanda el array duplicando sus 
posiciones con los mismos valores de cada posicion */
const numerosMezclados = [...numeros, ...numeros].sort(
  () => Math.random() - 0.5
);

let cartaAnterior = null;
let bloquear = false;
let parejasEncontradas = 0;
let juegoIniciado = false;
let tiempo = 60;

const iniciarCuentaAtras = () => {
  const cuentaAtras = setInterval(() => {
    if (tiempo >= 0) {
      document.querySelector(
        "#tiempo"
      ).textContent = `Tiempo restante: ${tiempo}s`;
      tiempo--;
    } else {
      clearInterval(cuentaAtras);
      bloquear = true;
      document.querySelector("#tiempo").textContent = "¡Tiempo agotado!";
      setTimeout(() => alert("¡Se acabó el tiempo! Inténtalo de nuevo."), 100);
    }
  }, 1000);
};

botones.forEach((boton, i) => {
  boton.dataset.numero = numerosMezclados[i];

  boton.addEventListener("click", () => {
    if (bloquear || boton.dataset.encontrada || boton === cartaAnterior) return;

    if (!juegoIniciado) {
      juegoIniciado = true;
      iniciarCuentaAtras();
    }

    boton.textContent = boton.dataset.numero;

    if (!cartaAnterior) {
      cartaAnterior = boton;
      return;
    }

    if (cartaAnterior.dataset.numero === boton.dataset.numero) {
      // si es pareja
      cartaAnterior.dataset.encontrada = true;
      boton.dataset.encontrada = true;
      cartaAnterior.style.backgroundColor = "#90EE90";
      boton.style.backgroundColor = "#90EE90";
      cartaAnterior = null;
      parejasEncontradas++;

      if (parejasEncontradas === 18) {
        setTimeout(() => alert("Haz ganado!"), 300);
      }
    } else {
      // si no es pareja
      bloquear = true;
      setTimeout(() => {
        boton.textContent = "?";
        cartaAnterior.textContent = "?";
        cartaAnterior = null;
        bloquear = false;
      }, 1000);
    }
  });
});
