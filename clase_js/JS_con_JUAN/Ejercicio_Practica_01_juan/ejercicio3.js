function invertirCadena() {
  const boton = document.querySelector("#boton");
  boton.addEventListener("click", () => {
    /* function invertir(array) {
      var letra = "";
      for (let i = array.length; i >= 0; i--) {
        if (array[i] === undefined) {
          continue;
        }
        letra += array[i];
      }
      console.log(letra);
    }
    const input = document.querySelector("#input").value.trim();
    invertir(input); */


    //FORMA MEJOR Y MAS RESUMIDA
    const input = document.querySelector("#input").value.trim();
    /* split('') convierte un string en un array de caracteres, y las comillas son para
    decirle que no hay ningun delimitador donde cortar, funciona casi igual que el explode de php.
    En este caso te lo divide por caracteres,ya que no especifico ningun delimitador
    PSDT: el delimitador son los espacios, si haces eso estarias creando un array por palabras y no por caracteres.*/
    /* reverse() Invierte el orden de los elementos del array */
    /* join('') Une los caracteres del array en un string nuevamente, las comillas vacias son para
    decirle que te una todos los elementos sin espacios en un string. */
    const invertir = input.split('').reverse().join('');
    console.log(invertir);
  });
}

/* invertirCadena(); */

function mismasLetras(){
    
    const boton = document.querySelector("#boton");
    boton.addEventListener("click", () => {
    
        function mismas(array){
            const input1 = array.push(document.querySelector("#input1").value.trim());
            const input2 = array.push(document.querySelector("#input2").value.trim());
            console.log(input1[0]);
            console.log(input2[1]);
        }
        var array = [];
        mismas(array);

    });

}

mismasLetras()