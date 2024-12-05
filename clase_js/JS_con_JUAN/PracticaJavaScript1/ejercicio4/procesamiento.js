document.querySelector('#agregar').addEventListener('click',()=>{
    const form = document.querySelector('#form1');
    let input = document.querySelector('#nombre').value.trim();
    let p = document.querySelector("#existe");
    let ul;
    var contenido = [];
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
        contenido.push(li.textContent);
        for (let i = 0; i < ul.children.length; i++) {
            let verificar = ul.children[i].textContent;
            if(contenido.includes(verificar)){
                p.textContent = 'EL ELEMENTO QUE INTETNAS AÑADIR YA EXISTE'
                p.style.color = 'red';
                return;
            }else{
                p.textContent = '';
            }
        }
        ul.appendChild(li);
    }
    
});

document.querySelector('#quitar').addEventListener('click',()=>{
    const form = document.querySelector('#form2');
    
    console.log(contenido)

});