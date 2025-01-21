async function promesa(num) {
    if(num === 1){
        throw new Error('No puedes ingresar 1')
    }else{
        return (num)=>{
            console.log(num*2);
        };
    }
}

async function consumir(numero) {
    try{
        const esperando = await promesa(numero);
        esperando(numero);
    }catch(error){
        console.log(error.message);
    }
}

consumir(1);