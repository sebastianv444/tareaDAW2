function datos(){
    let cantidad;
    do {
        cantidad = parseInt(prompt("ingrese su cantidad de euros sin el €: "));
    } while (isNaN(cantidad) || cantidad < 0);

    return cantidad;
}

function procesar(){
    let dato = datos();
    let billetes = [50,20,10,5];
    let monedas = [2,1,0.50,0.20,0.10,0.05,0.02,0.01];

    

}

(function main(){
    datos();
})()