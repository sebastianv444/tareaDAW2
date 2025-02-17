function audioMenu(element) {
  var audio = new Audio("../../Audio/Efecto de sonido Menu.mp3");
  audio.volume = 0.5; //esto significa que el audio esta a un 50% de volumen
  audio.play();

  setTimeout(function () {
    window.location.href = element.getAttribute("href");
  }, 1000);

  return false;
}

function navSeleccionadoQuitar() {
  const seleccionado = document.getElementById("seleccionado");
  const iconoBorrar = document.getElementById("iconoBorrar");

  // Ocultar el icono del seleccionado
  iconoBorrar.style.display = "none";

  seleccionado.style.justifyContent = "flex-end";
  seleccionado.style.backgroundColor = "transparent";
  seleccionado.style.animation = "none";
}

function navSeleccionadoNOQuitar() {
  const seleccionado = document.getElementById("seleccionado");
  const iconoBorrar = document.getElementById("iconoBorrar");

  //mostrar el icono del seleccionado
  iconoBorrar.style.display = "block";

  seleccionado.style.transition =
    "justify-content 0.5s, background-color 0.3s, box-shadow 5.5s 0.3s";
  seleccionado.style.justifyContent = "";
  seleccionado.style.backgroundColor = "";
  seleccionado.style.animation = "";
}

function redirigirSeccion2() {
  // Utilizamos la función scrollTo para desplazarnos a la sección deseada
  // El parámetro "behavior" con valor "smooth" proporciona un desplazamiento suave
  document.getElementById("seccion2").scrollIntoView({ behavior: "smooth" });
}
