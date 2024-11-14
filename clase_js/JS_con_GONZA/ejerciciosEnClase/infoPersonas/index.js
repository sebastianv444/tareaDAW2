const personas = [
  { nombre: "Ana", edad: 25, profesion: "Ingeniera" },
  { nombre: "Carlos", edad: 30, profesion: "Diseñador" },
  { nombre: "Beatriz", edad: 22, profesion: "Desarrolladora" },
];

const contenedor = document.querySelector("#contenedor-persona");

/* personas.forEach((persona) => {
  const divPersona = document.createElement("div");
  //classlist sirve para añadir una clase a el element creado.
  divPersona.classList.add("persona");

  //creamos los elementos para el nombre, edad y profesión:
  const nombreElemento = document.createElement("div");
  nombreElemento.classList.add("nombre");
  nombreElemento.textContent = `Nombre: ${persona.nombre}`;

  const edadElemento = document.createElement("div");
  edadElemento.classList.add("edad");
  edadElemento.textContent = `edad: ${persona.edad}`;

  const profesionElemento = document.createElement("div");
  profesionElemento.classList.add("edad");
  profesionElemento.textContent = `profesion: ${persona.profesion}`;

  //insetar los elemntos dentro del elemento.
  divPersona.appendChild(nombreElemento);
  divPersona.appendChild(edadElemento);
  divPersona.appendChild(profesionElemento);

  //agregar el div de la persona en el contenedor principal
  contenedor.appendChild(divPersona);

});//fin for Each. */


/* recuerda que con la funcion flecha si solo le pones 
una instruccion de una sola linea te hace un return por defecto. */
const htmlPersona = personas.map((pesona) => 
  `
    <div class="persona">
      <div class="nombre">Nombre: ${pesona.nombre}</div>
      <div class="edad">Edad: ${pesona.edad}</div>
      <div class="profesion">Profesion: ${pesona.profesion}</div>
    </div>
  `
).join('');

//metodo join() me va juntando las posiciones del array personas y le quita las comillas y las junta.
//join convierte un array en un cadena y lo almacena en la variable.
contenedor.innerHTML = htmlPersona;

console.log(htmlPersona);