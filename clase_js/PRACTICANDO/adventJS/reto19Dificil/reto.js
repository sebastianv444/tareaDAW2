const peso1=[" _ ", "|_|"];
const peso2=[" ___ ", "|___|"];
const peso5=[" _____ ", "|     |", "|_____|"];
const peso10=[" _________ ", "|         |", "|_________|"];

function distributeWeight(peso){

    for (let i = 0; i <= peso; i++) {
        switch(peso){
            case 1:
                const element = peso1[i];
                console.log(element);
                break;
            default:
                break;
        }
    }

}

distributeWeight(1)