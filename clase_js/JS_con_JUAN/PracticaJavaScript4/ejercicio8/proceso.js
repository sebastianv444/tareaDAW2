const textarea = document.querySelector("textarea");
const avisos = document.querySelector("#avisos");

function guardar() {
  localStorage.setItem("texto", textarea.textContent.trim());
}

function restaurar() {
  if (localStorage.getItem("texto") !== null) {
    textarea.value = localStorage.getItem("texto");
  } else {
    avisos.textContent = "No hay nada que restaurar ahora.";
    avisos.style.color = "red";
  }
}

function eliminar() {}

textarea.addEventListener("keydown", () => {
  setTimeout(() => {
    guardar();
  }, 3000);
});

document.querySelector("#restaurar").addEventListener("click",restaurar);

document.querySelector("#borrar").addEventListener("click",eliminar);