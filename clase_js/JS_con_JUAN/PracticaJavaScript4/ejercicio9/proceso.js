const botones = document.querySelectorAll(".agregar");
const carritoMostrar = document.querySelector(".carrito");
let carrito = [];

function agregarAlCarrito(event) {
  const datos = comprobarProducto(event);
  if (!datos) return console.log("error no existe el producto");
  carrito.push(datos);

  const li = document.createElement("li");
  li.textContent = `${datos.nombre} - €${datos.precio.toFixed(2)}`;

  const btnEliminar = document.createElement("button");
  btnEliminar.textContent = "X";
  btnEliminar.classList.add("eliminar");
  btnEliminar.setAttribute("data-id", datos.id);

  li.appendChild(btnEliminar);
  document.getElementById("lista-carrito").appendChild(li);
  li.querySelector(".eliminar").addEventListener("click", eliminarDelCarrito);
  console.log(carrito);

  //ver el dinero en tiempo real

  carrito.forEach((producto) => {
    console.log(producto.precio);
    carritoMostrar.querySelector("#total")
  });
}

function comprobarProducto(event) {
  //selecciona al elemento padre del boton clickado.
  const producto = event.target.parentElement;

  const id = parseInt(producto.dataset.id);
  const nombre = producto.querySelector("h3").textContent.trim();
  const precioTexto = producto.querySelector(".precio").textContent.trim();
  const precio = parseFloat(precioTexto.replace("€", ""));

  return { id, nombre, precio };
}

function eliminarDelCarrito(event) {
  const id = event.target.dataset.id;
  carrito.forEach((objeto) => {
    objeto;
  });
  console.log(event.target.dataset.id);
}

botones.forEach((boton) => {
  boton.addEventListener("click", agregarAlCarrito);
});
