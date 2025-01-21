<?php

    /* 
        Podemos utilizar más de un trait por clase
    */

    trait Saludo {
        public function decirHola() {
            echo "Hola, buenas";
        }
    }

    trait Despedida {
        public function decirAdios(){
            echo "adiós, pásalo bien";
        }
    }

    class Gente {
        use Saludo, Despedida;
    }

    $persona = new Gente();
    $persona->decirHola();
    $persona->decirAdios();
