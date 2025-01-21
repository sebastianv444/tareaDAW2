<?php

    /* 
        Personalización de métodos en traits

        Podmos modificar el comportamiento de los métodos dentro de la clase
    */

     trait Salud {
        public function decirHola(){
            echo "¡hola desde el trait!";
        }
     }

     class Persona {
        use Salud;

        public function decirHola()
        {
            echo "este hola desde la clase";
        }
     }

     $persona = new Persona();
     $persona->decirHola();