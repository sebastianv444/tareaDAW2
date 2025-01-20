document.querySelector("#crear").addEventListener('click',()=>{
    let nombre = document.querySelector("#nombre").value.trim();
    let mostrar = document.querySelector("#mostrar");

    if (nombre !== '') {
        localStorage.setItem('nombre',nombre)
        mostrar.textContent = 'Nombre guardado exitosamente';
    }else{
        return mostrar.textContent =  'escriba bien su nombre';
    }

})

document.querySelector("#eliminar").addEventListener('click',()=>{
    
    let mostrar = document.querySelector("#mostrar");

    if(localStorage.getItem('nombre') !== null){
        localStorage.removeItem('nombre');
        mostrar.textContent = 'Eliminado exitosamente';
    }else{
        return mostrar.textContent =  'No hay nada que eliminar';
    }

});

document.querySelector("#consultar").addEventListener('click',()=>{
    
    let mostrar = document.querySelector("#mostrar");

    if(localStorage.getItem('nombre') === null){
        return mostrar.textContent =  'No hay nada que Consultar';
    }else{
        let nombre = localStorage.getItem('nombre');
        mostrar.textContent = nombre;
    }

});