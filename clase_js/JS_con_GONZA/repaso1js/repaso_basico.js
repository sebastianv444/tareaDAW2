/**
 * un arrow function es una funcion anonima.
 * esta es una funcion de primera clase, ya que se puede asignar a cualquier variable.
 */

const saludar = (parametro) => {
    //esta forma se llama template string, es una forma de escribir mas moderna.
    console,log(`
        el parametro
        `);
}

// CALLBACKS

function imprimir (estaFuncion){
    estaFuncion();
};

function decirAlgo(){
    console.log("estoy diciendo cosas");
}

imprimir(decirAlgo);

// otra forma de pasar un callback(MAS USADA ACTUALMENTE).

function imprimir2(segundos,callback){
    setTimeout(()=>{
        callback();
    },segundos)
};

imprimir2(2000,()=>{
    console.log("siuuu");
});

const h = {
    a: 'juan'
}
