function leerMenu(){
    let opcion;
    do {
        opcion = parseInt(prompt("Introduce tu opcion ha realizar:\n1.Sumar\n2.Restar\n3.Multiplicar\n4.Dividir\n5.Modulo\n6.Elevar\n7.Salir"));
    } while (isNaN(opcion) || opcion <= 0 || opcion > 7);

    return opcion;
}

function leerNumero(){
    let numeros = [];
    let numero;
    for (let i = 0; i < 2; i++) {
        do {
            numero = parseFloat(prompt("Introduce un numero: "));
        } while (isNaN(numero) || numero < 0);
        numeros.push(numero);
    }

    return numeros;
}

function escribirResultado(resultado){
    return `el resultado de tu operacion es: ${resultado}`;
}

function sumar(a,b){
    return a + b;
}

function restar(a,b){
    return a - b;
}

function multiplicar(a,b){
    return a * b;
}

function dividir(a,b){
    return a / b;
}

function elevar(a,b){
    return Math.pow(a,b);
}

function modulo(a,b){

}

function evaluarMenu(){
    let salir = false;

    while(salir !== true){
    
        let menu = leerMenu();
        let numeros;
        let numeroUno;
        let numeroDos;
        let resultado = 0;

        switch (menu) {
            case 1:
                numeros = leerNumero()
                numeroUno = numeros[0];
                numeroDos = numeros[1];
                resultado = sumar(numeroUno,numeroDos);
                alert(`${escribirResultado(resultado)}`);
                break;
            case 2:
                numeros = leerNumero()
                numeroUno = numeros[0];
                numeroDos = numeros[1];
                resultado = restar(numeroUno,numeroDos);
                alert(`${escribirResultado(resultado)}`);
                break;
            case 3:
                numeros = leerNumero()
                numeroUno = numeros[0];
                numeroDos = numeros[1];
                resultado = multiplicar(numeroUno,numeroDos);
                alert(`${escribirResultado(resultado)}`);
                break;
            case 4:
                numeros = leerNumero()
                numeroUno = numeros[0];
                numeroDos = numeros[1];
                resultado = dividir(numeroUno,numeroDos);
                alert(`${escribirResultado(resultado)}`);
                break;
            case 5:
                numeros = leerNumero()
                numeroUno = numeros[0];
                numeroDos = numeros[1];
                resultado = modulo(numeroUno,numeroDos);
                alert(`${escribirResultado(resultado)}`);
                break;
            case 6:
                numeros = leerNumero()
                numeroUno = numeros[0];
                numeroDos = numeros[1];
                resultado = elevar(numeroUno,numeroDos);
                alert(`${escribirResultado(resultado)}`);
                break;
            case 7:
                salir = true;
                break;
            default:
                break;
        }

    }
}

(function main(){
    
    evaluarMenu();
    
})()