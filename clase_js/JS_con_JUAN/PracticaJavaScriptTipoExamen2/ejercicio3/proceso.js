let coleccion = [];
const rutaBase = "./img";

function proceso() {
  const nombre = document.querySelector("#nombre-game");
  const archivo = document.querySelector("#archivo");
  const precioOriginal = document.querySelector("#precio-original");
  const estado = document.querySelector("#estado-actual");
  const fechaLanzamiento = document.querySelector("#fecha-lanzamiento");

  /* console.log(nombre.value);
  console.log(precioOriginal.value);
  console.log(estado.value);
  console.log(fechaLanzamiento.valueAsDate);
  console.log(archivo.value); // obtienes la ruta completa(Fictisia) ( split('\\') )
  console.log(archivo.files[0]?.name); // obtienes directamente el nombre del archivo con su tipo */

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

  const nuevoJuego = {
    nombre: nombre.value,
    precio: precioOriginal.value,
    estado: estado.value,
    fecha: fechaLanzamiento.valueAsDate,
    imagen: archivo.files[0]?.name,
  };

  coleccion.push(nuevoJuego);

  const html = `
  <div class="coleccion__juego">
    <img
      src="${rutaBase}/${nuevoJuego.imagen}"
      alt="${nuevoJuego.nombre}"
      style="box-shadow: 0px 0px 13px black"
    />
    <div>
      <h2>${nuevoJuego.nombre}</h2>
      <p>precio: ${nuevoJuego.precio}</p>
      <p>estado: ${nuevoJuego.estado}</p>
      <p>fecha: ${new Date(nuevoJuego.fecha).toLocaleDateString()}</p>
    </div>
  </div>
  `;

  const div = document.createElement("div");
  div.innerHTML = html;

  document.querySelector("#coleccion").appendChild(div.firstElementChild);
}

document.querySelector("#añadir").addEventListener("click", proceso);
