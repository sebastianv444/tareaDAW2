let coleccion = [];

function proceso() {
  const nombre = document.querySelector("#nombre-game");
  const archivo = document.querySelector("#archivo");
  const precioOriginal = document.querySelector("#precio-original");
  const estado = document.querySelector("#estado-actual");
  const fechaLanzamiento = document.querySelector("#fecha-lanzamiento");

  console.log(nombre.textContent);
  console.log(precioOriginal.textContent);
  console.log(estado.value);
  console.log(fechaLanzamiento.valueAsDate);
  console.log(archivo.value); // obtienes la ruta completa(Fictisia)
  console.log(archivo.files[0]?.name); // obtienes directamente el nombre del archivo con su tipo
  
  document.querySelector("img").src = `./img/${ruta[ruta.length - 1]}`;
}

document.querySelector("button").addEventListener("click", proceso);
