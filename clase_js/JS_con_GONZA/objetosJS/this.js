const cosa = "una cosita";

const producto = {
    nombre: "mi monitor 140 pulgadas",
    precio: 600,
    disponible: true,
    mostrarInfo: () => {
        //usando template string
        console.log(
            `el producto 
             es ${this.nombre} y precio: ${this.precio}`
             //this nos permite acceder a las propiedades de un objeto en el que nos encontremos.
        )
    }
}

producto.mostrarInfo();