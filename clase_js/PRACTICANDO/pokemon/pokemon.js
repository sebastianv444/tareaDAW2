fetch("https://pokeapi.co/api/v2/pokemon/")
  .then((response) => response.json())
  .then((users) => {
    fetch(users.next)
      .then((Response) => Response.json())
      .then((data) => {
        var url = data.results[4].url;
        fetch(url)
          .then((respuesta) => respuesta.json())
          .then((datos) => pikachu(datos));
      });
  })
  .catch((error) => console.error("Error al obtener los usuarios:", error));

function pikachu(params) {
  var body = document.body;
  var contenido = `<h1>Tu Pokemon</h1><br>
            <p>nombre: ${params.name}</p>
            <p>peso: ${params.wheight}</p>
            <p>statBase: ${params.stats[0].base_stat}</p>`;
  body.innerHTML = contenido;
}
