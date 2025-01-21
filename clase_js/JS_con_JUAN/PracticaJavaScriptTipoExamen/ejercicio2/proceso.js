function obtenerFechaSumada() {
  let dia, mes, año;
  do {
    alert("Ha continuacion ingrese su fecha de nacimiento");
    dia = prompt("Ingrese el dia: ").trim();
    mes = prompt("Ingrese el mes en formato numero: ").trim();
    año = prompt("Ingrese el año: ").trim();

    if (dia.length > 2 || mes.length > 2 || año.length !== 4) {
      (dia = NaN), (mes = NaN), (año = NaN);
      alert("INGRESE BIEN SU FECHA!!");
    } else {
      dia = parseInt(dia);
      mes = parseInt(mes);
      año = parseInt(año);
    }
  } while (
    isNaN(dia) ||
    dia < 0 ||
    isNaN(mes) ||
    mes < 0 ||
    isNaN(año) ||
    año < 0
  );

  let fechaSumada = dia + mes + año;

  while (fechaSumada >= 10) {
    fechaSumada = String(fechaSumada)
      .split("")
      .reduce((a, b) => a + parseInt(b));
  }

  return fechaSumada;
}

(function main() {
  alert(`Tu número del Tarot es: ${obtenerFechaSumada()}`);
})();
