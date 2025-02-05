const textarea = document.querySelector("textarea");
const avisos = document.querySelector("#avisos");

function guardar() {
  if (textarea.value.trim() !== "") {
    localStorage.setItem("texto", textarea.value.trim());
    avisos.textContent = "Texto guardado automáticamente.";
    avisos.style.color = "green";
    setTimeout(() => (avisos.textContent = ""), 2000);
  } else {
    avisos.textContent = "No hay nada que guardar.";
    avisos.style.color = "red";
    setTimeout(() => (avisos.textContent = ""), 2000);
  }
}

function restaurar() {
  if (localStorage.getItem("texto") !== null) {
    textarea.value = localStorage.getItem("texto");
    avisos.textContent = "Texto restaurado.";
    avisos.style.color = "green";
    setTimeout(() => (avisos.textContent = ""), 2000);
  } else {
    avisos.textContent = "No hay nada que restaurar ahora.";
    avisos.style.color = "red";
    setTimeout(() => (avisos.textContent = ""), 2000);
  }
}

function eliminar() {
  textarea.value = "";
  localStorage.removeItem("texto");
  avisos.textContent = "Texto borrado exitosamente.";
  avisos.style.color = "green";
  setTimeout(() => (avisos.textContent = ""), 2000);
}

textarea.addEventListener("input", guardar);

document.querySelector("#restaurar").addEventListener("click", restaurar);

document.querySelector("#borrar").addEventListener("click", eliminar);
