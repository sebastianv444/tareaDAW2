let contenido = [];
document.querySelector('#agregar').addEventListener('click',()=>{
    const form = document.querySelector('#form1');
    let input = document.querySelector('#nombre').value.trim();
    let p = document.querySelector("#existe");
    let ul;
    
    if (input === "") {
        p.textContent = 'Por favor, ingresa un valor antes de agregar.';
        p.style.color = 'red';
        return;
    } else {
        p.textContent = ''; // Limpiar mensaje de error
    }
    if(form.lastChild.id !==  'OK'){
        ul = document.createElement("ul");
        ul.setAttribute("id","OK");
        let li = document.createElement('li');
        li.textContent = input;
        ul.appendChild(li);
        form.appendChild(ul);
        contenido.push(li.textContent);
    }else{
        ul = document.querySelector('#OK');
        let li = document.createElement('li');
        li.textContent = input;
            if(contenido.includes(input)){
                p.textContent = 'EL ELEMENTO QUE INTETNAS AÑADIR YA EXISTE'
                p.style.color = 'red';
                console.log(contenido)
                return;
            }else{
                p.textContent = '';
            }
        contenido.push(input);
        ul.appendChild(li);
    }
    
});

document.querySelector('#quitar').addEventListener('click',()=>{
    const form2 = document.querySelector('#form2');
    const form1 = document.querySelector('#form1');
    let quitarInput = form2.querySelector('#quitarInput').value.trim();
    let ul = document.querySelector('#OK');
    let p = document.querySelector("#existe");

    if(form1.lastChild.id !== 'OK' ){
        p.textContent = 'No existe nada en la lista para eliminar';
        p.style.color = 'red';
        return;
    }
    /* si no encuentra el elemento en el array retorna un -1, en caso lo encontrara, 
    devuelve la posicion en el array */
    let indice = contenido.indexOf(quitarInput);
    if(indice === -1){
        p.textContent = 'Lo que quieres eliminar no existe en la lista';
        p.style.color = 'red';
        return;
    }
    /* tanto el array de contenido[] como los nodos hijos del UL, compraten las mismas 
    posiciones, por eso uso el mismo indice obtenido con el indexOf */
    contenido.splice(indice,1);
    ul.removeChild(ul.children[indice]);
    p.textContent = 'Elemento eliminado correctamente';
    p.style.color = 'green';

});
