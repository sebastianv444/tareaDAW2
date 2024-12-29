class Rectangulo{
    /* los atributos se crean por defecto al crear el objeto */
    
    constructor(ancho,alto){
        this._ancho = ancho;
        this._alto = alto;
    }

    get ancho(){
        return this._ancho;
    }

    set ancho(ancho){
        if(ancho > 0){
            this._ancho = ancho;
        }else{
            console.log('el ancho tiene que ser mayor que 0');
        }
    }

    get alto(){
        return this._alto;
    }

    set alto(alto){
        if (alto > 0) {
            this._alto = alto;
        }else{
            console.log('el alto tiene que ser mayor que 0');
        }
    }

    Area(){
        return this._alto * this._ancho;
    }

    Perimetro(){
        return 2 * (this._alto + this._ancho);
    }

}

let rectangulo = null;
let mostrar = document.querySelector('#mostrar');

function crearRectangulo() {
  const ancho = parseInt(document.querySelector("#ancho").value);
  const alto = parseInt(document.querySelector("#alto").value);
  rectangulo = new Rectangulo(ancho, alto);
}

function mostrarMensaje(mensaje) {
  mostrar.textContent = mensaje;
}

function mostrarArea() {
  if (rectangulo) {
    mostrarMensaje(`Área: ${rectangulo.Area()}`);
  } else {
    mostrarMensaje('¡Aún no creas tu rectángulo, recuerda hacerlo!');
  }
}

function mostrarPerimetro() {
  if (rectangulo) {
    mostrarMensaje(`Perímetro: ${rectangulo.Perimetro()}`);
  } else {
    mostrarMensaje('¡Aún no creas tu rectángulo, recuerda hacerlo!');
  }
}

document.querySelector("#crear").addEventListener("click", crearRectangulo);
document.querySelector("#area").addEventListener("click", mostrarArea);
document.querySelector("#perimetro").addEventListener("click", mostrarPerimetro);