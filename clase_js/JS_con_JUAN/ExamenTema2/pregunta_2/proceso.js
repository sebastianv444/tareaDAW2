function datos(){
    let dato;
    do {
        dato = parseInt(prompt("Ingrese los km recorridos con el automovil rentado: "))
    } while (isNaN(dato) || dato < 0);

    return dato;
}

function procesar(){
    let cantidadFija = 100;
    let usuario = datos();
    let costePagar = 0;

    if(usuario <= 300){
        costePagar = cantidadFija;
    }else if(usuario > 300 && usuario < 1000){
        costePagar = ((usuario - 300) * 0.50)+cantidadFija;
    }else if(usuario > 1000){
        let otroCoste = (usuario - 1000) * 0.25;
        costePagar = (((usuario - 300) * 0.50)+ cantidadFija)- otroCoste;
    }

    return costePagar;

}

(function main(){
    alert(`Su cantidad a pagar es de: ${procesar()}€`);
})()