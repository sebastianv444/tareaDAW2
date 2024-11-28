function tarea1(){
    return new Promise((resolve)=>{
        setTimeout(()=>{
            resolve('tarea 1 resuelta')
        },1000);
    });
}

function tarea2(){
    return new Promise((resolve)=>{
        setTimeout(()=>{
            resolve('tarea 2 resuelta')
        },1000);
    });
}

/* tarea1()
    .then(resultado => {
        console.log(resultado);
        return tarea2();
    })
    .then(resultado2=>{
        console.log(resultado2);
    }) */

//con async/await:

async function ejecutarTarea() {
    const resultado1 = await tarea1();
    console.log("¿cuando se ejecuta eto?")//esto se ejecuta despues que el await reciba una respuesta;
    console.log(resultado1);

    const resultado2 = await tarea2();
    console.log(resultado2);
}
ejecutarTarea();
/* async function name(params) {
    
    const asi = await fetch('https://jsonplaceholder.typicode.com/todos/1');

} */