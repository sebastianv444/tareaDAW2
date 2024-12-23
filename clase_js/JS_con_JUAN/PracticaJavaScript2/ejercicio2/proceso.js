let i = 1;
let valor;
let random;
let set; 
let contador = document.querySelector("span");

document.querySelector("#comenzar").addEventListener("click", () => {
  clearInterval(set); 
  i = 1; // Reiniciar el contador
  contador.textContent = '';
  document.querySelector("#num").value = ''; // Limpiar el input
  document.querySelector("div").hidden = true;
  document.querySelector("form").hidden = false;

  let resultado1 = document.querySelector("#resultado1");
  resultado1.textContent = ''; 
  resultado1.style.color = "black";

  set = setInterval(() => {
    contador.textContent = i;
    i++;
    if (i > 15) {
      clearInterval(set);
      document.querySelector("div").hidden = false;
      document.querySelector("form").hidden = true;
      if (isNaN(valor)) {
        resultado1.textContent = "NO RESPONDISTE :/";
        resultado1.style.color = "black";
      }
      return;
    }
  }, 1000);
});

// Botón "Adivinar"
document.querySelector("#adivinar").addEventListener("click", () => {
  clearInterval(set); // para detener el intervalo activo
  valor = parseInt(document.querySelector("#num").value);
  random = Math.floor(Math.random() * 20) + 1;

  let resultado1 = document.querySelector("#resultado1");
  console.log(random);
  console.log(valor);

  if (valor === random) {
    resultado1.textContent = "ADIVINASTE BIEN!!";
    resultado1.style.color = "green";
  } else if (isNaN(valor)) {
    resultado1.textContent = "NO RESPONDISTE :/";
    resultado1.style.color = "black";
  } else {
    resultado1.textContent = "NO ADIVINASTE :/";
    resultado1.style.color = "red";
  }

  // Reiniciar la interfaz
  document.querySelector("div").hidden = false;
  document.querySelector("form").hidden = true;
  contador.textContent = ''; 
});
