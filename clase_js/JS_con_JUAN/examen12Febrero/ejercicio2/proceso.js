const razas = ["Dracónido","Elfo","Enano","Gnomo","Humano","Mediano","Semielfo","Semiorco","Tiefling"];
const clases = ["Bárbaro","Bardo","Brujo","Clérigo","Druida","Explorador","Guerrero","Hechicero","Mago","Monje","Paladín","Pícaro"];
const terminaciones = ["des","syl","bol","rath","gel","zar","klys","for","vin","yrta","mon","vers"];
const vocales = ["a","e","i","o","u"];
const consonantes = ["b","c","d","f","g","h","j","k","l","m","n","o","p","q","r","s","t","v","w","x","y","z"];
const mostrar = document.querySelector("#mostrar");

function generar(){
    let nombreFinal = `${random('consonante')}${random('consonante')}${random('vocal')}${random('terminacion')}`;
    let claseFinal = `${random('clase')}`;
    let razaFinal = `${random('raza')}`;
    let puntuacion1 = random('dado');
    let puntuacion2 = random('dado');
    let puntuacion3 = random('dado');
    let puntuacion4 = random('dado');
    let puntuacion5 = random('dado');
    let puntuacion6 = random('dado');

    mostrar.innerHTML += `
        <li>${nombreFinal}</li>
        <li>${claseFinal}</li>
        <li>${razaFinal}
            <ul>
                <li>${puntuacion1}</li>
                <li>${puntuacion2}</li>
                <li>${puntuacion3}</li>
                <li>${puntuacion4}</li>
                <li>${puntuacion5}</li>
                <li>${puntuacion6}</li>
            </ul>
        </li>
    `
}

function random(random){
    switch (random) {
        case 'consonante':
            let randomConsonante = Math.trunc(Math.random() * consonantes.length);
            return consonantes[randomConsonante];
        case 'vocal':
            let randomVocal = Math.trunc(Math.random() * vocales.length);
            return vocales[randomVocal];
        case 'terminacion':
            let randomTerminacion = Math.trunc(Math.random() * terminaciones.length);
            return terminaciones[randomTerminacion];
        case 'clase':
            let randomClase = Math.trunc(Math.random() * clases.length);
            return clases[randomClase];
        case 'raza':
            let randomRaza = Math.trunc(Math.random() * razas.length);
            return razas[randomRaza];
        case 'dado':
            let dado1 = Math.trunc(Math.random() * 6) + 1;
            let dado2 = Math.trunc(Math.random() * 6) + 1;
            let dado3 = Math.trunc(Math.random() * 6) + 1;
            let dado4 = Math.trunc(Math.random() * 6) + 1;
            
            let temporal = [dado1,dado2,dado3,dado4];

            let a = temporal.reduce((acc,i)=> acc + i);

            return a;
        default:
            break;
    }
}

document.querySelector("#generar").addEventListener("click",generar);