function existe(array,objeto){
    return new Promise((resolve,reject)=>{
      array.includes(objeto);
        setTimeout(()=>{
        if(array){
            resolve('existe en el array');
        }else{
            reject('no existe en el array');
        }
      },2000);  
    });
}

async function prueba(array,objeto) {
    try{
        const bien = await existe(array,objeto);
        console.log(bien);
    }catch(error){
        console.log(error);
    }
}

const miArray = [1,2,'pera',{nombre: 'juan'}];

prueba(miArray,obj = {nombre: 'juan'})