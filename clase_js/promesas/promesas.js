/**
 * concepto:
 * 
 */

const promesa = new Promise((resolve,reject)=>{
    //Logica de la operacion asincronia.
    const exito = true; // Puedes cambiar esto para probar ambas ramas.

    setTimeout(()=>{
        if(exito){
            resolve("operacion completada exitosamente");
        }else{
            reject("Error en la operacion");
        };
    },1000);//Simulamos una operacion asíncrona con setTimeout.
})

//consumiendo promesa.

promesa
    .then((resultado)=>{
        console.log(resultado); //Esto ocurre si se llama a resolve.
    })
    .catch((error)=>{
        console.log(error); //Esto ocurre si se llama a reject.
    })