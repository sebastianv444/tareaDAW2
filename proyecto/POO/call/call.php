<?php

    /* 
        Método mágico __call

        sustituye a la sobrecarga de métodos que existe en otros legunajes
        ¿Cuándo se usa el método __call?

        - Para manejar métodos inexistentes en la clase
        - Para agregar flexibilidad en la clase, como generar métodos en tiempo
        de ejecución.

        OJO: tenemos que poner en publico el casi siempre el __call.
    */

    class Calculadora {

        /* cuando la clase detecta que llamamos a un método que no existe,
        se ejecuta el método __call */
        public function __call($name, $arguments)
        {
            if ($name == "sumar") {
                return array_sum($arguments);
            } elseif($name == "multiplicar"){
                return array_product($arguments);
            }
            throw new Exception("Operación " . $name ." no se pudo soportar");
        }
    }

    $calculadora = new Calculadora();
    echo $calculadora->sumar(1,2,3,4) . "<br>";
    echo $calculadora->multiplicar(4,6,7);