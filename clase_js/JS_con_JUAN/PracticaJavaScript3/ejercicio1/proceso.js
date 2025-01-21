class Operaciones {
  constructor(num1, num2) {
    this._num1 = num1;
    this._num2 = num2;
  }

  sumar() {
    return this._num1 + this._num2;
  }

  restar() {
    return this._num1 - this._num2;
  }

  multiplicar() {
    return this._num1 * this._num2;
  }

  dividir() {
    return this._num1 / this._num2;
  }

  modulo() {
    return this._num1 % this._num2;
  }

  potencia() {
    return Math.pow(this._num1, this._num2);
  }
}

function main() {
  const input1 = parseFloat(document.querySelector("#num1").value);
  const input2 = parseFloat(document.querySelector("#num2").value);
  const opciones = document.getElementById("opciones");
  const mostrar = document.getElementById("mostrar");

  const operaciones = new Operaciones(input1, input2);
  let resultado = 0;
  switch (opciones.value) {
    case "sumar":
      resultado = operaciones.sumar();
      mostrar.textContent = "Resultado: " + resultado;
      mostrar.style.fontSize = "33px";
      mostrar.style.color = "green";
      break;
    case "restar":
      resultado = operaciones.sumar();
      mostrar.textContent = "Resultado: " + resultado;
      mostrar.style.fontSize = "33px";
      mostrar.style.color = "green";
      break;
    case "multiplicar":
      resultado = operaciones.sumar();
      mostrar.textContent = "Resultado: " + resultado;
      mostrar.style.fontSize = "33px";
      mostrar.style.color = "green";
      break;
    case "dividir":
      resultado = operaciones.sumar();
      mostrar.textContent = "Resultado: " + resultado;
      mostrar.style.fontSize = "33px";
      mostrar.style.color = "green";
      break;
    case "modulo":
      resultado = operaciones.sumar();
      mostrar.textContent = "Resultado: " + resultado;
      mostrar.style.fontSize = "33px";
      mostrar.style.color = "green";
      break;
    case "potencia":
      resultado = operaciones.sumar();
      mostrar.textContent = "Resultado: " + resultado;
      mostrar.style.fontSize = "33px";
      mostrar.style.color = "green";
      break;
    default:
      console.log("nop");
      break;
  }
}

document.querySelector("button").addEventListener("click", () => main());
