class Rectangulo {
    
    constructor(ancho,alto){
        this._ancho = ancho;
        this._alto = alto;
    }

    get

    Area(){
        return this.alto * this.ancho;
    }

    Perimetro(){
        return 2 * (this.alto + this.ancho);
    }

}

export default Rectangulo;