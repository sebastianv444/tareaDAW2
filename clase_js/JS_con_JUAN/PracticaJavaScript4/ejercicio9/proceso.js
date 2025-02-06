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
  mostrarDinero();
}

function mostrarDinero() {
  let precioMostrar = 0;
  const mostrarPrecio = document.querySelector("#total");

  carrito.forEach((producto) => {
    precioMostrar += producto.precio;
  });

  mostrarPrecio.textContent = `€${precioMostrar}.00`;
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
  const productoContainer = event.target.parentElement.parentElement;
  const producto = event.target.parentElement;

  for (let i = 0; i < carrito.length; i++) {
    if (carrito[i].id === id) {
      carrito.splice(i, 1); 
      console.log(carrito);
      let posicionEliminar = Array.from(productoContainer.children).indexOf(
        producto
      );
      let liAeliminar = productoContainer.children[posicionEliminar];
      productoContainer.removeChild(liAeliminar);
      mostrarDinero();
      return console.log("se elimino del carrito");
    }
  }
}

botones.forEach((boton) => {
  boton.addEventListener("click", agregarAlCarrito);
});

function pagar(){
  setTimeout(()=>{
    
  },3000)
}

document.querySelector(".pagar").addEventListener("click",)