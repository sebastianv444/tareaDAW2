/* Solo hice los getters, ya que no considere utiles los seters. */
class Vehiculo {
  constructor(marca, añoFabricacion) {
    this._marca = marca;
    this._añoFabricacion = añoFabricacion;
  }

  get marca() {
    return this._marca;
  }

  get añoFabricacion() {
    return this._añoFabricacion;
  }
}

class Motorizado extends Vehiculo {
  constructor(marca, añoFabricacion, kilometraje, proximaITV) {
    super(marca, añoFabricacion);
    this._kilometraje = kilometraje;
    this._proximaITV = proximaITV;
  }

  get kilometraje() {
    return this._kilometraje;
  }

  get proximaITV() {
    return this._proximaITV;
  }
}

class Coche extends Motorizado {
  constructor(
    marca,
    añoFabricacion,
    kilometraje,
    proximaITV,
    color,
    transmision
  ) {
    super(marca, añoFabricacion, kilometraje, proximaITV);
    this._color = color;
    this._transmision = transmision;
  }

  get color() {
    return this._color;
  }

  get transmision() {
    return this._transmision;
  }
}

class Moto extends Motorizado {
  constructor(
    marca,
    añoFabricacion,
    kilometraje,
    proximaITV,
    color,
    modelo,
    forma
  ) {
    super(marca, añoFabricacion, kilometraje, proximaITV);
    this._color = color;
    this._modelo = modelo;
    this._forma = forma;
  }

  get color() {
    return this._color;
  }

  get modelo() {
    return this._modelo;
  }

  get forma() {
    return this._forma;
  }
}

class Camion extends Motorizado {
  constructor(marca, añoFabricacion, kilometraje, proximaITV, cargaMaxima) {
    super(marca, añoFabricacion, kilometraje, proximaITV);
    this._cargaMaxima = cargaMaxima;
  }

  get cargaMaxima() {
    return this._cargaMaxima;
  }
}

class NoMotorizado extends Vehiculo {
  constructor(marca, añoFabricacion, estado, electrico) {
    super(marca, añoFabricacion);
    this._estado = estado;
    this._electrico = electrico;
  }

  get estado() {
    return this._estado;
  }

  get electrico() {
    return this._electrico;
  }
}

class Bicicleta extends NoMotorizado {
  constructor(marca, añoFabricacion, estado, electrico, numMarchas, numPlatos) {
    super(marca, añoFabricacion, estado, electrico);
    this._numMarchas = numMarchas;
    this._numPlatos = numPlatos;
  }

  get numMarchas() {
    return this._numMarchas;
  }

  get numPlatos() {
    return this._numPlatos;
  }
}

class Patinete extends NoMotorizado {
  constructor(marca, añoFabricacion, estado, electrico, autonomia) {
    super(marca, añoFabricacion, estado, electrico);
    this._autonomia = autonomia;
  }

  get autonomia() {
    return this._autonomia;
  }
}

function actualizarFormulario() {
    const tipoVehiculo = document.getElementById("tipoVehiculo").value;
    const camposDinamicos = document.getElementById("camposDinamicos");

    camposDinamicos.innerHTML = ""; 

    if (tipoVehiculo === "Coche") {
        camposDinamicos.innerHTML = `
            <label>Kilometraje: <input type="number" id="kilometraje"></label>
            <label>Próxima ITV: <input type="text" id="proximaITV"></label>
            <label>Color: <input type="text" id="color"></label>
            <label>Transmisión: <select id="transmision">
                <option value="manual">Manual</option>
                <option value="auto">Automática</option>
            </select></label>
        `;
    } else if (tipoVehiculo === "Moto") {
        camposDinamicos.innerHTML = `
            <label>Kilometraje: <input type="number" id="kilometraje"></label>
            <label>Próxima ITV: <input type="text" id="proximaITV"></label>
            <label>Color: <input type="text" id="color"></label>
            <label>Modelo: <input type="text" id="modelo"></label>
            <label>Forma: <input type="text" id="forma"></label>
        `;
    } else if (tipoVehiculo === "Camion") {
        camposDinamicos.innerHTML = `
            <label>Kilometraje: <input type="number" id="kilometraje"></label>
            <label>Próxima ITV: <input type="text" id="proximaITV"></label>
            <label>Carga máxima: <input type="number" id="cargaMaxima"></label>
        `;
    } else if (tipoVehiculo === "Bicicleta") {
        camposDinamicos.innerHTML = `
            <label>Estado: <select id="estado">
                <option value="nuevo">Nuevo</option>
                <option value="reacondicionado">Reacondicionado</option>
                <option value="usado">Usado</option>
            </select></label>
            <label>Eléctrico: <select id="electrico">
                <option value="si">Sí</option>
                <option value="no">No</option>
            </select></label>
            <label>Número de marchas: <input type="number" id="numMarchas"></label>
            <label>Número de platos: <input type="number" id="numPlatos"></label>
        `;
    } else if (tipoVehiculo === "Patinete") {
        camposDinamicos.innerHTML = `
            <label>Estado: <select id="estado">
                <option value="nuevo">Nuevo</option>
                <option value="reacondicionado">Reacondicionado</option>
                <option value="usado">Usado</option>
            </select></label>
            <label>Eléctrico: <select id="electrico">
                <option value="si">Sí</option>
                <option value="no">No</option>
            </select></label>
            <label>Autonomía: <input type="number" id="autonomia"></label>
        `;
    }
}

function crearObjeto() {
    const tipoVehiculo = document.getElementById("tipoVehiculo").value;
    const marca = document.getElementById("marca").value;
    const añoFabricacion = document.getElementById("añoFabricacion").value;

    let objetoCreado;

    if (tipoVehiculo === "Coche") {
        const kilometraje = document.getElementById("kilometraje").value;
        const proximaITV = document.getElementById("proximaITV").value;
        const color = document.getElementById("color").value;
        const transmision = document.getElementById("transmision").value;
        objetoCreado = new Coche(marca, añoFabricacion, kilometraje, proximaITV, color, transmision);
    } else if (tipoVehiculo === "Moto") {
        const kilometraje = document.getElementById("kilometraje").value;
        const proximaITV = document.getElementById("proximaITV").value;
        const color = document.getElementById("color").value;
        const modelo = document.getElementById("modelo").value;
        const forma = document.getElementById("forma").value;
        objetoCreado = new Moto(marca, añoFabricacion, kilometraje, proximaITV, color, modelo, forma);
    } else if (tipoVehiculo === "Camion") {
        const kilometraje = document.getElementById("kilometraje").value;
        const proximaITV = document.getElementById("proximaITV").value;
        const cargaMaxima = document.getElementById("cargaMaxima").value;
        objetoCreado = new Camion(marca, añoFabricacion, kilometraje, proximaITV, cargaMaxima);
    } else if (tipoVehiculo === "Bicicleta") {
        const estado = document.getElementById("estado").value;
        const electrico = document.getElementById("electrico").value;
        const numMarchas = document.getElementById("numMarchas").value;
        const numPlatos = document.getElementById("numPlatos").value;
        objetoCreado = new Bicicleta(marca, añoFabricacion, estado, electrico, numMarchas, numPlatos);
    } else if (tipoVehiculo === "Patinete") {
        const estado = document.getElementById("estado").value;
        const electrico = document.getElementById("electrico").value;
        const autonomia = document.getElementById("autonomia").value;
        objetoCreado = new Patinete(marca, añoFabricacion, estado, electrico, autonomia);
    }

    document.getElementById("resultado").innerText = `Objeto creado: ${JSON.stringify(objetoCreado, null, 2)}`;
}

document.querySelector('#tipoVehiculo').addEventListener('change',()=>actualizarFormulario());
document.querySelector('#crear').addEventListener('click',()=>crearObjeto());