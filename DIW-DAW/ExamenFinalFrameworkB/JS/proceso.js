document.addEventListener("DOMContentLoaded", () => {
  const botonNocturno = document.querySelector("#nocturno");
  const botonIdioma = document.querySelector("#idioma");
  const body = document.body;
  const inglesSeccion1 = document.querySelector(
    ".container__derecha--descripcion"
  ).innerHTML;
  const españolSeccion1 = `¡Hola! Soy Sebastián Moreno, desarrollador web con título Superior
  Título de Técnico en Desarrollo de Aplicaciones Web, obtenido
  después de completar una carrera de nivel superior en España. me destaco por
  mi capacidad para resolver problemas y superar desafíos con
  creatividad y eficiencia, tanto de forma independiente como como parte de un
  equipo colaborativo, transformando cualquier situación en una oportunidad
  para optimizar resultados.<br /><br />Me considero un profesional
  comprometidos con la calidad y la mejora continua, esforzándonos siempre
  combinar innovación y eficiencia en cada proyecto. yo prospero en
  entornos colaborativos, donde puedo aportar mis habilidades a
  el éxito de un equipo, mientras sigo ampliando mis conocimientos y
  adaptarse a los retos del mercado tecnológico.`;
  const inglesSeccion2 = document.querySelector(".p2").innerHTML;
  const españolSeccion2 = `Estas son sólo algunas de las muchas ideas que tengo planeadas para el futuro, incluidas aplicaciones móviles, 
  aplicaciones de TV inteligente, videojuegos y muchos otros proyectos. Me apasiona profundamente la tecnología y 
  innovación y me esfuerzo constantemente al límite, buscando siempre la excelencia.
  Cada vez que me embarco en aprender algo nuevo, lo hago con determinación inquebrantable y confianza en mí mismo. 
  sabiendo que cada nueva habilidad que adquiera me ayudará a hacer realidad estas ideas. Yo creo firmemente que 
  El crecimiento y la mejora continuos son las claves para convertir las visiones creativas en realidad. uno de mis 
  Mi mayor aspiración es desarrollar videojuegos, un objetivo que tengo cerca del corazón desde hace mucho tiempo. I 
  imaginamos la creación de experiencias inmersivas y atractivas no solo para la web sino también para consolas, PC y 
  dispositivos móviles.`;

  if (localStorage.getItem("modoNocturno") === "activado") {
    body.classList.add("modo-nocturno");
  }

  if (localStorage.getItem("idioma") === "es") {
    document.querySelector(".container__derecha--descripcion").innerHTML =
      españolSeccion1;
    document.querySelector(".texto p").innerHTML = españolSeccion2; 
  } else {
    document.querySelector(".container__derecha--descripcion").innerHTML =
      inglesSeccion1;
    document.querySelector(".col-md-4 p").innerHTML = inglesSeccion2;
  }

  botonNocturno.addEventListener("click", (event) => {
    event.preventDefault();

    body.classList.toggle("modo-nocturno");

    if (body.classList.contains("modo-nocturno")) {
      localStorage.setItem("modoNocturno", "activado");
    } else {
      localStorage.setItem("modoNocturno", "desactivado");
    }
  });

  botonIdioma.addEventListener("click", (event) => {
    event.preventDefault();

    if (localStorage.getItem("idioma") === "es") {
      localStorage.setItem("idioma", "en");
      document.querySelector(".container__derecha--descripcion").innerHTML =
        inglesSeccion1;
      document.querySelector(".p2").innerHTML = inglesSeccion2;
    } else {
      localStorage.setItem("idioma", "es");
      document.querySelector(".container__derecha--descripcion").innerHTML =
        españolSeccion1;
      document.querySelector(".p2").innerHTML = españolSeccion2;
    }
  });
});
