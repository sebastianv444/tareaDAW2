const nombres = document.querySelectorAll("#nombre");
const apellidos = document.querySelectorAll("#apellido");
const mostrar = document.querySelector("#mostrar");

function generar() {
  let random1 = Math.trunc(Math.random() * 3);
  let random2 = Math.trunc(Math.random() * 3);

  return `${nombres[random1].textContent} ${apellidos[random2].textContent}`;
}

function mostrarNombre() {
  let nombreCompleto = generar();
  mostrar.textContent = nombreCompleto;
}

async function portapapeles() {
  try {
    const portapapeles = await navigator.clipboard.writeText(mostrar.textContent);
  } catch (error) {
    console.log(error);
  }
}

document.querySelector("#generador").addEventListener("click", mostrarNombre);
document.querySelector("#portapapeles").addEventListener("click", portapapeles);
