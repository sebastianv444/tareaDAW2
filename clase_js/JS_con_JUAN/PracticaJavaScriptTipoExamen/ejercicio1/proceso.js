function leerDatos() {
  let salario;
  let horaSemanales;
  let tarifa;

  do {
    salario = parseInt(prompt("Ingrese su salario").trim());
  } while (isNaN(salario) || salario < 0);

  do {
    horaSemanales = parseInt(prompt("Ingrese Sus Horas Trabajadas").trim());
  } while (isNaN(horaSemanales) || horaSemanales < 0);

  do {
    tarifa = parseInt(prompt("Ingrese la tarifa").trim());
  } while (isNaN(tarifa) || tarifa < 0);

  if(horaSemanales > 38){

  }else{
    
  }

}

function main(){

}