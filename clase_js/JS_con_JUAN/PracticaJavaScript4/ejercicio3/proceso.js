let i = 0;

document.querySelector("#avanzar").addEventListener("click", () => {
  /* OJO: no puse la variable imagenes como  global, ya que habria errores al pasarlo solo como 
    parametro. */
  const imagenes = [
    "cocheTesla1.jpeg",
    "paisaje1.jpeg",
    "paisaje2.jpeg",
    "painShinraTensei.jpeg",
  ];
  avanzar(imagenes);
  console.log(i);
});

function avanzar(imagenes) {
  const img = document.querySelector("img");
  if (i < imagenes.length - 1) {
    i++;
    img.src = "./img/" + imagenes[i];
  }else{
    i = 0;
    img.src = "./img/" + imagenes[i];
  }
}

document.querySelector("#retroceder").addEventListener("click", () => {
  const imagenes = [
    "cocheTesla1.jpeg",
    "paisaje1.jpeg",
    "paisaje2.jpeg",
    "painShinraTensei.jpeg",
  ];
  retroceder(imagenes);
  console.log(i);
});

function retroceder(imagenes) {
  const img = document.querySelector("img");
  i--;
  if (i < imagenes.length - 1 && i >= 0) {
    img.src = "./img/" + imagenes[i];
    /* console.log("entro al if"); */
    
  }else{
    i = 3;
    img.src = "./img/" + imagenes[i];
  }
}