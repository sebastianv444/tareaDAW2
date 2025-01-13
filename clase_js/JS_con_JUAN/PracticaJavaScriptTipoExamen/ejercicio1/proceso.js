function proceso() {
  let salario;
  let horaSemanales;
  let tarifa;
  let horasExtra;
  let numTrabajadores;
  let netoTrabajadores = 0;

  do {
    numTrabajadores = parseInt(prompt("Ingrese la cantidad de empleados").trim());
  } while (isNaN(numTrabajadores) || numTrabajadores < 0);

  for (let i = 1; i <= numTrabajadores; i++) {
    do {
      salario = parseInt(prompt("Ingrese su salario").trim());
    } while (isNaN(salario) || salario < 0);

    do {
      horaSemanales = parseInt(prompt("Ingrese Sus Horas Trabajadas").trim());
    } while (isNaN(horaSemanales) || horaSemanales < 0);

    do {
      tarifa = parseInt(prompt("Ingrese la tarifa").trim());
    } while (isNaN(tarifa) || tarifa < 0);

    do {
      horasExtra = parseInt(
        prompt("Ingrese sus horas extras trabajadas").trim()
      );
    } while (isNaN(horasExtra) || horasExtra < 0);

    if (horaSemanales <= 38) {
      horaSemanales = tarifa;
      salario += horaSemanales;
    }

    if (horasExtra) {
      horasExtra *= 1.5;
      salario += horasExtra;
    }

    let salarioLibresImpuestos = 1000;

    if (salario > 1000) {
      salario -= salarioLibresImpuestos;
      if (salario > 0 && salario <= 3000) {
        salario *= 0.25;
      } else {
        salario *= 0.45;
      }
      salario += salarioLibresImpuestos;
    }

    netoTrabajadores += salario;
  }

  return netoTrabajadores;
}

(function main() {
  alert(`El neto total de sus trabajadores es: ${proceso()}`);
})();