const titulo = document.querySelector("#titulo");
const autor = document.querySelector("#autor");
const archivo = document.querySelector("#archivo");
const numPaginas = document.querySelector("#numPaginas");
const selectForm = document.querySelector("#seleccion__formulario");
const rutaBase = "./img/";
let coleccion = [];
let id = 0;

/* document.addEventListener("DOMContentLoaded", () => {
  let coleccionLocal = localStorage.getItem("coleccion");
  if (coleccionLocal) {
    coleccion = JSON.parse(coleccionLocal);
  }
}); */

function añadirColeccion() {
  if (
    titulo.value == "" ||
    autor.value == "" ||
    archivo.value == "" ||
    numPaginas.value == "" ||
    selectForm.value == ""
  ) {
    return alert("haz dejado algo en blanco");
  }

  let libro = {
    id:id++,
    titulo: titulo.value,
    autor: autor.value,
    img: archivo.value.split("\\").pop(),
    estado: selectForm.value,
    paginas: numPaginas.value,
  };

  coleccion.push(libro);
  /* localStorage.setItem("coleccion", JSON.stringify(coleccion)); */
  añadirHTML(libro);
}

/* function actualizar(){
    coleccion.forEach(libro =>{
        añadirHTML(libro);
    })
} */

function añadirHTML(libro) {
  let html = `
        <div id="leido__item">
        <img src="${rutaBase}${libro.img}" alt="" />
        <div>
          <h3>${libro.titulo}</h3>
          <p>autor: <span>${libro.autor}</span></p>
          <p>progreso <span>0</span>%</p>
          <select name="" id="">
            <option value="leido" ${libro.estado == 'leido' ? 'selected':''}>Leído</option>
            <option value="leyendo" ${libro.estado == 'leyendo' ? 'selected':''}>Leyendo</option>
            <option value="quieroLeer" ${libro.estado == 'quieroLeer' ? 'selected':''}>Quiero leer</option>
          </select>
          <button type="button" id="actualizar">Actualizar</button><br /><br />
          <div id="actualizar__seccion" hidden>
            <input type="text" placeholder="/1200" /><br />
            <button type="button" id="actualizar__actualizar">
              actualizar
            </button>
            <button type="button" id="actualizar_cancelar">cancelar</button
            ><br /><br />
          </div><br>
          <button type="button" id="eliminar">Eliminar</button>
        </div>
      </div>
    `;

  document.querySelector(`#${libro.estado}`).innerHTML += html;

    document.querySelector("#actualizar").addEventListener("click", () => {
    document.querySelector("#actualizar__seccion").hidden = false;
  });

  document.querySelectorAll("#eliminar").addEventListener("click", ()=>{eliminar(libro)});
}

function eliminar(libro) {
    let posicionEliminar = coleccion.findIndex(lib => lib.id == libro.id);
    console.log("posicion a eliminar: " + posicionEliminar);
    coleccion.splice(posicionEliminar,1);
    console.log(coleccion);
}

document.querySelector("#añadir").addEventListener("click", añadirColeccion);
