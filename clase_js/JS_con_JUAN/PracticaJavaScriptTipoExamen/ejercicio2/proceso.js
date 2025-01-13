function obtenerFechaSumada() {
  let dia, mes, año;
  do {
    alert("Ha continuacion ingrese su fecha de nacimiento");
    dia = prompt("Ingrese el dia: ").trim();
    mes = prompt("Ingrese el mes en formato numero: ").trim();
    año = prompt("Ingrese el año: ").trim();

    if(dia.length > 2 || mes.length > 2 || año.length !== 4){
      dia = NaN, mes = NaN, año = NaN;
      alert("INGRESE BIEN SU FECHA!!")
    }else{
      dia = parseInt(dia);
      mes = parseInt(mes);
      año = parseInt(año);
    }

  } while (
    isNaN(dia) ||
    dia < 0 || isNaN(mes) ||
    mes < 0 || isNaN(año) ||
    año < 0
  );

  let fechaSumada = dia + mes + año;
  fechaSumada = String(fechaSumada);
  fechaSumada = fechaSumada.split("");
  fechaSumada = fechaSumada.map(a => parseInt(a));
  
  let total;

  do {
    total = fechaSumada.reduce((a,b)=>a+b,0);
    fechaSumada = String(total).split("");
  } while (String(total).length === 1);
  
  console.log(total);
  
}

obtenerFechaSumada();