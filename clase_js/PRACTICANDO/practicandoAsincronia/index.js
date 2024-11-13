function buscar(array,objeto){
    return new Promise((resolve,reject)=>{
      const existe = array.find(i=>typeof i =='object' && i.nombre === objeto.nombre||i == objeto);
        setTimeout(()=>{
        if(existe){
            resolve('existe en el array');
        }else{
            reject('no existe en el array');
        }
      },1000);  
    });
}

async function prueba(array,objeto) {
    try{
        const bien = await buscar(array,objeto);
        bien(mensaje=>{
            console.log(mensaje);
        })
    }catch(error){
        console.log(error);
    }
}

const miArray = [1,2,'pera',{nombre: 'juan'}];

prueba(miArray,obj = {nombre: 'juan'})