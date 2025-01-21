function datos(){
    let palabra = '';
    do {
        palabra = prompt("Ingrese su palabra a comprobar");
    } while (palabra.length === '' || !isNaN(palabra));

    return palabra;
}

function procesar(){
    palabra = datos();
    palabraInvertida = palabra.split("").reverse().join("");

    if(palabra === palabraInvertida){
        return "la palabra es palindroma";
    }else{
        return "No es palindroma";
    }
}

(function main(){
    alert(procesar());
})()