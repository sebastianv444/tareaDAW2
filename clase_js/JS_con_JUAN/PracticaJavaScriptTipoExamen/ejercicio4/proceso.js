function proceso(){
    let precio;

    do {
        precio = parseInt(prompt("Ingrese el precio: "));
    } while (isNaN(precio) || precio < 0);

    let descuento;
    let precioDescuento;

    if(precio >= 6 && precio < 60){
        descuento = precio * 0.05;
        precioDescuento = precio - descuento;
    }else if(precio > 60){
        descuento = precio * 0.10;
        precioDescuento = precio - descuento;
    }

    return ` Precio inicial: ${precio}\n Valor del descuento: ${descuento}\n Precio final: ${precioDescuento}`;

}

(function main() {
    alert(proceso());
})();