document.querySelector("button").addEventListener("click",()=>{
    let p = document.querySelector("#mostrar");
    let input = document.querySelector("#DNI").value.trim();

    if(input.length > 9 || input.length < 9){
        p.textContent = "INGRESA BIEN TU DNI";
        p.style.color = "red";
        return;
    }else{
        p.textContent = "";
    }

    input = input.split("");
    
    let numerosDNI = input.map((a)=>{
        if(!isNaN(a)){
            return a;
        }
    });

    let operacion = (parseInt(numerosDNI.join(''))) % 23;
    let comprobacion = '';
    try {
        switch(operacion){
            case 0:
                comprobacion = 'T';
                break;
            case 1:
                comprobacion = 'R';
                break;
            case 2:
                comprobacion = 'W';
                break;
            case 3:
                comprobacion = 'A';
                break;
            case 4:
                comprobacion = 'G';
                break;
            case 5:
                comprobacion = 'M';
                break;
            case 6:
                comprobacion = 'Y';
                break;
            case 7:
                comprobacion = 'F';
                break;
            case 8:
                comprobacion = 'P';
                break;
            case 9:
                comprobacion = 'D';
                break;
            case 10:
                comprobacion = 'X';
                break;
            case 11:
                comprobacion = 'B';
                break;
            case 12:
                comprobacion = 'N';
                break;
            case 13:
                comprobacion = 'J';
                break;
            case 14:
                comprobacion = 'Z';
                break;
            case 15:
                comprobacion = 'S';
                break;
            case 16:
                comprobacion = 'Q';
                break;
            case 17:
                comprobacion = 'V';
                break;
            case 18:
                comprobacion = 'H';
                break;
            case 19:
                comprobacion = 'L';
                break;
            case 20:
                comprobacion = 'C';
                break;
            case 21:
                comprobacion = 'Q';
                break;
            default:
                throw new Error('SU DNI NO EXISTE');
                break;
        }
    } catch (error) {
        p.textContent = error;
        p.style.color = 'red'
        return;
    }
    let letraDNI = input.filter((i)=>isNaN(i));
    letraDNI = letraDNI.join('')
    if(letraDNI === comprobacion){
        p.textContent = 'SU DNI ES CORRECTO';
        p.style.color = 'green'
    }else{
        p.textContent = 'LA LETRA DE SU DNI NO COINCIDE';
        p.style.color = 'red'
    }
    
});