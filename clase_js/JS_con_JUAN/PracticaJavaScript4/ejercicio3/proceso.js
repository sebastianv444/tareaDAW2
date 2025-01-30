function retrocederImagen(){

}

async function avanzar(imagenes,clicks) {
    const img = document.querySelector('img');
    let click = await arguments;
    img.src = imagenes[1];
}

function proceso(){
    const imagenes = ['cocheTesla1.jpeg','paisaje1.jpeg','paisaje2.jpeg','painShinraTensei.jpeg'];
    
}

document.querySelector('#avanzar').addEventListener('click',()=>{
    const imagenes = ['cocheTesla1.jpeg','./img/paisaje1.jpeg','paisaje2.jpeg','painShinraTensei.jpeg'];
    
});