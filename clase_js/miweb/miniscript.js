document.addEventListener('DOMContentLoaded', function() {
    const nombreInut = document.querySelector("#nombre");
    const result = document.querySelector("#result");

nombreInut.addEventListener('blur', function(){
    if(nombreInut.value === ''){
        result.textContent = 'El campo nombre no puede estar vacío';
        result.style.color = 'red';
    }else{
        result.textContent = 'El campo nombre esta completo';
        result.style.color = 'green';
    }
})



//2. evento mouseover en el div
const hoverDiv = document.querySelector('#hover-text');

hoverDiv.style.display = 'inline-block';
//al pasar el raton en el div.
hoverDiv.addEventListener('mouseover', ()=>{
    hoverDiv.style.backgroundColor = 'lightgreen';
    hoverDiv.textContent = '!Has pasado el raton por aquí!';
})
//al quitar el raton del div.
hoverDiv.addEventListener('mouseout', () =>{
    hoverDiv.style.backgroundColor = 'lightblue'
    hoverDiv.textContent = 'pasa el ratón por aquí!'
});

//3.evento submit en el formulario
const form = document.getElementById('contactForm');
form.addEventListener('submit', (event) =>{
    //evita que el formulario se envie, esto lo puedes meter dentro de un if para que si por ejemplo no si el usuario no lleno el campo nombre meterias dentro del if el preventDefault con un argumento pedido por una funcion para que no se envíe, ya que no se completo ese input.
    event.preventDefault();
    const result = document.getElementById('result');

    //validamos los campos de formulario
    const emailInput = document.getElementById('email');
    const mensajeInput = document.getElementById('mensaje');

});

});