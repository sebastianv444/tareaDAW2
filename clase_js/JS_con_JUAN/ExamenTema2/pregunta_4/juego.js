function ingresar(){
    let jugador;
    do {
        jugador = parseInt(prompt("escoga uno:\n0.Piedra\n1.Tijera\n2.papel"))
    } while(isNaN(jugador) || jugador < 0 || jugador > 2);

    return jugador;
}

function logica(){
    let maquina;
    let jugador;
    let jugadorGana = 0;
    let maquinaGana = 0;
    let empate = 0;

    for (let i = 0; i < 3; i++) {
        jugador = ingresar();
        maquina = Math.trunc(Math.random()*3);

        if(jugador == 0 && maquina == 0){
            empate++;
        }else if(jugador == 0 && maquina == 1){
            jugadorGana++
        }else if(jugador == 0 && maquina == 2){
            maquinaGana++
        }else if(jugador == 1 && maquina == 0){
            maquinaGana++;
        }else if(jugador == 1 && maquina == 1){
            empate++;
        }else if(jugador == 1 && maquina == 2){
            jugadorGana++
        }else if(jugador == 2 && maquina == 0){
            jugadorGana++;
        }else if(jugador == 2 && maquina == 1){
            maquinaGana++;
        }else if(jugador == 2 && maquina == 2){
            empate++
        }
        
    }

    if(jugadorGana > maquinaGana){
        return `Victorias del jugador: ${jugadorGana}\nVictorias de la maquina: ${maquinaGana}\nempates: ${empate}\nEl jugador ha ganado`;
    }
    if(maquinaGana > jugadorGana){
        return `Victorias del jugador: ${jugadorGana}\nVictorias de la maquina: ${maquinaGana}\nempates: ${empate}\nLa maquina ha ganado`;
    }
    if(empate > jugadorGana && empate > maquina){
        return `Victorias del jugador: ${jugadorGana}\nVictorias de la maquina: ${maquinaGana}\nempates: ${empate}\nHan quedado empates`;
    }
}

(function main(){
    alert(logica());
})();