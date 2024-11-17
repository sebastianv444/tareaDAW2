let misDatos;
let etiqueta = document.getElementById('contenedor');
let p = document.createElement('p');

fetch("https://jsonplaceholder.typicode.com/users/1")
  .then((response) => {
    if (!response.ok) {
      throw new Error(`Error en la solicitud: $
    {response.status}`);
    }
    return response.json();
    })
    //el valor de data es lo que retorno en el anterior then
  .then((data) => {
    console.log("Datos del usuario:", data);
    misDatos = data;
    p.textContent = misDatos.name;
    etiqueta.appendChild(p);
    })
  .catch((error) => {
    console.error("Error al obtener el usuario:", error);
  });
