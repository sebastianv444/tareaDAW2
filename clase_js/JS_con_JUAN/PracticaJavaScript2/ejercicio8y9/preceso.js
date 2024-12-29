const botones = document.querySelectorAll(".boton");

// Crear y mezclar números
const numeros = [...Array(18)].map((_, i) => i + 1);
const numerosMezclados = [...numeros, ...numeros].sort(
  () => Math.random() - 0.5
);

// Variables de control
let cartaAnterior = null;
let bloquear = false;
let parejasEncontradas = 0;

// Inicializar botones
botones.forEach((boton, i) => {
  boton.dataset.numero = numerosMezclados[i];

  boton.addEventListener("click", () => {
    if (bloquear || boton.dataset.encontrada || boton === cartaAnterior) return;

    // Mostrar número
    boton.textContent = boton.dataset.numero;

    if (!cartaAnterior) {
      cartaAnterior = boton;
      return;
    }

    // Verificar si es pareja
    if (cartaAnterior.dataset.numero === boton.dataset.numero) {
      // Es pareja
      cartaAnterior.dataset.encontrada = true;
      boton.dataset.encontrada = true;
      cartaAnterior.style.backgroundColor = "#90EE90";
      boton.style.backgroundColor = "#90EE90";
      cartaAnterior = null;
      parejasEncontradas++;

      if (parejasEncontradas === 18) {
        setTimeout(() => alert("¡Has ganado!"), 300);
      }
    } else {
      // No es pareja
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
