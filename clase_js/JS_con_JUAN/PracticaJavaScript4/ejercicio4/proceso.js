let intentos = 0;
function moverAleatoriamente() {
  /* solo uso top y left, ya que tengo la posicion como absoluta y con top y left ya 
  bastarian, porque al el left al llegar a su limite si le ingresas mas pixeles iria en
  su direccion contraria moviendose a ambos lados de izquierda a derecha, y lo mismo con
  el top. */
  /* Le resto 50 que es el alto del boton y 100 del ancho del boton, porque de lo contrario
  el boton se saldria de la pantalla debido a su tamaño inicial. */
  let top = Math.trunc(Math.random() * (window.innerHeight - 50));
  let left = Math.trunc(Math.random() * (window.innerWidth - 100));
  console.log(top, left);

  const button = document.querySelector("button");

  button.style.top = `${top}px`;
  button.style.left = `${left}px`;
  
  intentos++;
}

document.querySelector("button").addEventListener("mouseover", ()=>{
  if(intentos !== 10){
    moverAleatoriamente();
  }else{
    intentos = 0;
    setTimeout(()=>{
      moverAleatoriamente();
    },5000);
  }
});
document.querySelector("button").addEventListener("click", ()=>{
  alert('me atrapaste');
});
