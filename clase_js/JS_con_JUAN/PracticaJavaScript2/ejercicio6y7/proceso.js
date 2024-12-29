const botones = document.querySelectorAll(".boton");
const mostrar = document.querySelector("#mostrar");
const operadores = ["+", "-", "*", "/"];

botones.forEach((boton) => {
  boton.addEventListener("click", () => {
    if (boton.textContent === "C") {
      mostrar.textContent = "0";
      return;
    }
    if (boton.textContent === "=") {
      try {
        let expresion = mostrar.textContent;

        // Reemplazar operaciones específicas
        if (expresion.includes("√")) {
          const numero = parseFloat(expresion.split("√")[1]);
          expresion = `Math.sqrt(${numero})`;
        } else if (expresion.includes("sin")) {
          const numero = parseFloat(expresion.split("sin")[1]);
          expresion = `Math.sin(${numero} * Math.PI / 180)`;
        } else if (expresion.includes("cos")) {
          const numero = parseFloat(expresion.split("cos")[1]);
          expresion = `Math.cos(${numero} * Math.PI / 180)`;
        } else if (expresion.includes("tan")) {
          const numero = parseFloat(expresion.split("tan")[1]);
          expresion = `Math.tan(${numero} * Math.PI / 180)`;
        }

        mostrar.textContent = eval(expresion);
      
      } catch (error) {
        mostrar.textContent = "ERROR";
      }
      return;
    }
    if (mostrar.textContent === "0" || mostrar.textContent === "ERROR" || mostrar.textContent === "NaN") {
      mostrar.textContent = boton.textContent;
    } else {
      mostrar.textContent += boton.textContent;
    }
  });
});
