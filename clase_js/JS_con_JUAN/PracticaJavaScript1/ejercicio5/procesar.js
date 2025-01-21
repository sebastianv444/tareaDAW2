let mapa = {};
document.querySelector('#enviar').addEventListener('click', () => {
    const tel = document.querySelector('#telefono');
    let telefono = document.querySelector('#telefono').value.trim();
    let observaciones = document.querySelector('#observaciones').value.trim();
    let p = document.querySelector('#respuesta');

    if(telefono === ''){
        tel.placeholder = 'LLENA ESTO!!';
        tel.style.borderColor = 'red';
        return;
    }else if(isNaN(telefono)){
        tel.placeholder = 'SOLO NUMEROS!!'
        tel.style.borderColor = 'red';
        tel.value = '';
        return;
    }else{
        tel.style.borderColor = '';
        tel.placeholder = '';
    }
    if(observaciones === ''){
        p.textContent = 'LLENA LAS OBSERVACIONES!!';
        p.style.color = 'red';
        return;
    }else{
        p.textContent = '';
    }
    
    /* no use el .telefono, ya que lo tomaba como cadena literal y no como el valor que 
    almacene en la variable telefono */
    mapa[telefono] = observaciones;

});

document.querySelector('#botonBuscar').addEventListener('click',()=>{
    let busqueda = document.querySelector("#buscar").value.trim();
    for (const key in mapa) {
        console.log(key);
    }
});