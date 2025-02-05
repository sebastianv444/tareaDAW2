const botones = document.querySelectorAll(".agregar");
let carrito = [];

function agregarAlCarrito(event){
    const datos = comprobarProducto(event);
    carrito.push(datos);
    /* console.log(datos); */

    const ul = document.querySelector('#lista-carrito')
    carrito.forEach(producto => {
        console.log('id: ' + producto.id,'nombre: ' + producto.nombre)
        let li = document.createElement("li");
        let article1 = document.createElement("article").textContent = `${producto.nombre}`;
        let article2 = document.createElement("article").textContent = `${producto.precio}`;
        li.appendChild(article1);
        li.appendChild(article2);
        ul.appendChild(li);
    });
}

function comprobarProducto(event){
    //selecciona al elemento padre del boton clickado.
    const producto = event.target.parentElement;

    const id = producto.children[0].alt;
    const nombre = producto.children[1].textContent;
    const precio = producto.children[2].textContent;
    let idEspecifico = 0;

    for (let i = 1; i <= 3; i++) {
     if(id.indexOf(`${i}`) !== -1){
        idEspecifico = i;
        console.log("se guardo con el id: ",idEspecifico);
        return {
            id: idEspecifico,
            nombre: nombre,
            precio: precio
        }
     }
    }
}

botones.forEach(boton => {
    boton.addEventListener("click",agregarAlCarrito);
});