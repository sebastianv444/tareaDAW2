const nombre = document.querySelector("#nombre-game");
const archivo = document.querySelector("#archivo");
const precioOriginal = document.querySelector("#precio-original");
const estado = document.querySelector("#estado-actual");
const fechaLanzamiento = document.querySelector("#fecha-lanzamiento");
const valorTotal = document.querySelector("#valorTotal");
let coleccion = [];
const rutaBase = "./img";

document.addEventListener("DOMContentLoaded", () => {
  let coleccionLocal = localStorage.getItem("coleccion");
  if (coleccionLocal) {
    console.log(coleccionLocal);
    coleccion = JSON.parse(coleccionLocal);
    guardadoMostrar(coleccion);
    document.querySelector("#eliminar").addEventListener("click", eliminar);
  }
});

function guardadoMostrar() {
  coleccion.forEach((i) => {
    juegoHTML(i);
  });
}

function añadir() {
  if (
    !nombre.value ||
    !precioOriginal.value ||
    !estado.value ||
    !fechaLanzamiento.value ||
    !archivo.files[0]?.name
  ) {
    alert("Todos los campos son obligatorios.");
    return;
  }

  añadirColeccion(nombre, archivo, precioOriginal, estado, fechaLanzamiento);

  nombre.value = "";
  archivo.value = "";
  precioOriginal.value = "";
  estado.value = "precintado";
  fechaLanzamiento.value = "";
}

function añadirColeccion() {
  const nuevoJuego = {
    nombre: nombre.value,
    /* si no se usa el parse, luego daria problemas en el .reduce() te pone un 0 al 
    principio seguido del valor final en la variable dineroTotal, ya que por defecto 
    estas obteniendo una cadena de texto del html */
    precio: parseFloat(precioOriginal.value),
    estado: estado.value,
    fecha: fechaLanzamiento.valueAsDate,
    imagen: archivo.files[0]?.name,
  };
  console.log(nuevoJuego.fecha);
  
  coleccion.push(nuevoJuego);
  juegoHTML(nuevoJuego);

  localStorage.setItem("coleccion", JSON.stringify(coleccion));
}

function juegoHTML(juego) {
  let dineroTotal = coleccion.reduce((acc, juego) => acc + juego.precio, 0);

  valorTotal.textContent = `${dineroTotal}`;
  const html = `
  <div class="coleccion__juego">
    <img
      src="${rutaBase}/${juego.imagen}"
      alt="${juego.nombre}"
      style="box-shadow: 0px 0px 13px black"
    />
    <div>
      <h2>${juego.nombre}</h2>
      <p>precio: ${juego.precio}</p>
      <p>estado: ${juego.estado}</p>
      <p>fecha: ${new Date(juego.fecha).toLocaleDateString()}</p>
      <p>Valor de venta actual: ${calcularPrecio(juego)}€</p>
      <button type="button" id="eliminar">Eliminar de la colección</button>
    </div>
  </div>
  `;
  /* toLocaleDateString(): se utiliza para convertir una fecha a una cadena de texto 
  con formato específico según la configuración regional (locale) del usuario. */

  document.querySelector("#coleccion").innerHTML += html;
}

function calcularPrecio(juego) {
  /* let annosDesdeSalida = new Date().getFullYear() - new Date(juego.fecha).getFullYear(); */
  let annosDesdeSalida = new Date().getDate() - new Date(juego.fecha).getDate()
  console.log(annosDesdeSalida);
}

function eliminar() {
  localStorage.removeItem("coleccion");
}

document.querySelector("#añadir").addEventListener("click", añadir);
