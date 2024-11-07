function accion(){
    console.log('llamada a accion')
}

/* el setTimeout es una funcion no bloqueante, esto quiere decir 
que la aplicacion seguira su curso sin bloquear las siguientes lineas. */

setTimeout(accion,2000);
//setTimeout(()=>console.log('llamando desde función flecha'),2000);

// con la primera funcion flecha le estas asignando una funcion a tarea1.
const tarea1 = () => {
    setTimeout(()=>console.log('tarea 1 completada en 3 segundos'),3000);
};
const tarea2 = () => { 
    setTimeout(()=>console.log('tarea 2 completada en 2 segundos'),2000);
};
const tarea3 = ()=>{
     setTimeout(()=>console.log('tarea 3 completada en 5 segundos'),5000);
};

tarea1();
tarea3();
tarea2();

//asincronía con callback

const tarea4 = (callback)=>{
    console.log("Iniciando tarea 1...");
    setTimeout(()=>{
        callback();
    },2000)
};

tarea4 (() => console.log("Tarea 1 terminada en 3 segundos"));

const tarea5 = (name,time,callback)=>{
    console.log(`Iniciando ${name}...`);
        setTimeout(()=>{
            callback();
        },time);
};

tarea5('tarea1',3000,()=>{
    console.log('tarea 1 completada');
    tarea5('tarea2',2000,()=>{
        console.log('tarea 2 completada');
        tarea5('tarea3',5000,()=>{
            console.log('tarea 3 completada');
        });
    });
});