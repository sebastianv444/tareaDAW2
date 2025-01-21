function calculartemperatura() {
  let temperaturaMax;
  let temperaturaMin;

  do {
    temperaturaMax = parseInt(prompt("Ingrese su temperaturaMax maxima: "));
    temperaturaMin = parseInt(prompt("Ingrese su temperaturaMax minima: "));
  } while (
    isNaN(temperaturaMax) ||
    temperaturaMax < 0 ||
    isNaN(temperaturaMin) ||
    temperaturaMin < 0
  );

  let temperaturaMedia = (temperaturaMax + temperaturaMin) / 2;

  return temperaturaMedia;
}

function temperaturaDiaria() {
  let diario;

  do {
    diario = parseInt(prompt("Ingrese el numero de dias: "));
  } while (isNaN(diario) || diario < 0);

  for (let i = 0; i < diario; i++) {
    alert(`tu temperatura media es: ${calculartemperatura()}`);
  }
}

(function main(){
    temperaturaDiaria();
})();
