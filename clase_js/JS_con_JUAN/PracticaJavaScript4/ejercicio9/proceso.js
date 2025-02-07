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

  mostrarDinero();
}

function mostrarDinero() {
  const total = carrito.reduce((acc, producto) => acc + producto.precio, 0);
  document.querySelector("#total").textContent = `€${total.toFixed(2)}`;
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
  const id = parseInt(event.target.dataset.id);
  const index = carrito.findIndex((producto) => producto.id === id);

  if (index !== -1) {
    carrito.splice(index, 1);
    event.target.parentElement.remove();
    mostrarDinero();
    console.log("Producto eliminado del carrito");
  }
}

botones.forEach((boton) => {
  boton.addEventListener("click", agregarAlCarrito);
});

function pagar() {
  const barraProgreso = document.getElementById("barra-progreso");
  const mensajePago = document.getElementById("mensaje-pago");

  // Mostrar la barra de progreso y reiniciar valores
  barraProgreso.style.display = "block";
  barraProgreso.value = 0;
  mensajePago.textContent = "Procesando pago...";

  let progreso = 0;
  const intervalo = setInterval(() => {
    progreso += 10;
    barraProgreso.value = progreso;

    if (progreso >= 100) {
      clearInterval(intervalo);
      mensajePago.textContent = "¡Pago completado con éxito!";

      carrito = [];
      document.getElementById("lista-carrito").innerHTML = "";
      document.getElementById("total").textContent = "€0.00";

      setTimeout(() => {
        barraProgreso.style.display = "none";
        mensajePago.textContent = "";
      }, 2000);
    }
  }, 300);
}

document.querySelector(".pagar").addEventListener("click",pagar);
