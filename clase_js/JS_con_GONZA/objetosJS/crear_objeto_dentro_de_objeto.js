const coche = {
    marca: 'renault',
    modelo: 'laguna',
    monitorizacion: '110cv',
    informacion: {
        peso: '1kg',
        longitud: '4m',
        ancho: '2m',
        fabricacion: {
            pais: 'lituania',
            anio: 2003
        }
    }
}

console.log(coche.informacion.peso);
console.log(coche['informacion']['peso']);
console.log(coche['informacion']['fabricacion'].pais);