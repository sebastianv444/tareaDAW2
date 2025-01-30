function cambiarFondo() {
  let ancho = window.innerWidth;
  let alto = window.innerHeight;
  let color = `rgb(${ancho % 256}, ${alto % 256}, ${(ancho + alto) % 256})`;
  document.body.style.backgroundColor = color;
}

/* no se ejecuta inmediatamente , le pasamos  la referencia de la función cambiarFondo 
al addEventListener, para que JavaScript la ejecute solo cuando ocurra el evento resize. */
/* Si le pusiera parentesis se ejecutaria inmediatamente la funcion sin que el usuario
haga algun cambio. */
window.addEventListener("resize", cambiarFondo);

/* esta llamada sirve solo para que te ponga un color incial al entrar a la pagina, si 
quitaramos esta linea no pasaria nada en funcionamiento a mi aplicacion, ya que esto
solo es para que tenga un color inicial al entrar a la pagina nada mas.*/
cambiarFondo(); 