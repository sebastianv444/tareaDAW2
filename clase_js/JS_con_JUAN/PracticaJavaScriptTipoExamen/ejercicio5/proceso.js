function leerFraccion(){

    let numerador,denominador;

    do {
        numerador = parseFloat(prompt("Ingrese el numerador: "));
        denominador = parseFloat(prompt("Ingrese el denominador: "));
    } while (isNaN(numerador) || numerador < 0 ||isNaN(denominador) || denominador < 0);

}

function escribirFraccion(){

    

}

escribirFraccion();