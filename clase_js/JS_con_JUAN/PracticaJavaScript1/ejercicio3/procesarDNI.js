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
    console.log(input)
    
    let numeroDNI = input.map((a)=>{
        if(!isNaN(a)){
            return a;
        }
    });

    let operacion = (parseInt(numeroDNI.join(''))) % 23;
    let comprobacion = '';
    try {
        switch(operacion){
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
                throw new Error;
                break;
        }
    } catch (error) {
        p.textContent = 'SU DNI NO EXISTE'
        p.style.color = 'red'
        return;
    }

});