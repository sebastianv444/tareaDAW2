const boton = document.querySelector('#boton');

boton.addEventListener("click",()=>{

    let fecha = new Date(Date.now());
    let fechaActual =`${fecha.getDate()}/${fecha.getMonth()+1}/${fecha.getFullYear()}`;

    /* padStart rellena el inicio de una cadena con caracteres especificados hasta alcanzar 
    una longitud especificada a la izquierda. */
    let horas = fecha.getHours().toString().padStart(2,"0");
    let minutos = fecha.getMinutes().toString().padStart(2,"0");
    let segundos = fecha.getSeconds().toString().padStart(2,"0");
    let horaActual = `${horas}:${minutos}:${segundos}`;

    const section = document.querySelector('#section');

    let p = section.querySelector('p');
    let b = section.querySelector('b');

    if(!b){
        b = document.createElement('b');
        b.style.fontWeight = '26px';
        section.appendChild(b);
    }
    if (!p) {
        p = document.createElement("p");
        section.appendChild(p);
    }
    
    b.innerHTML = fechaActual;
    p.innerHTML = horaActual;
});