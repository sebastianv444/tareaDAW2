class Persona {
  constructor(nombre, apellido1, apellido2) {
    this._nombre = nombre.trim();
    this._apellido1 = apellido1.trim();
    this._apellido2 = apellido2.trim();
  }

  apellidosNombre() {
    return `${this._apellido1} ${this._apellido2}, ${this._nombre}`;
  }
}

const nombre = document.querySelector("#nombre");
const apellido1 = document.querySelector("#apellido1");
const apellido2 = document.querySelector("#apellido2");
const mostrar = document.querySelector("h2");

document.querySelector("button").addEventListener("click", () => {
  const persona = new Persona(nombre.value, apellido1.value, apellido2.value);

  mostrar.textContent = persona.apellidosNombre();
});
