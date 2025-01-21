<?php

    /* CLASES ABSTRACTAS

    Es una clase que no se puede instanciar pero sí podemos heredar de ella. 
    Esta aclase define la estructura de la clase que lo herede.
    
    - Cada método de la clase abstracta tiene que ser implementado en la clase hija,
    y estos métodos en la clase abstracta no pueden tener ninguna implementación.

    - Las clases abstractas pueden tener métodos abtractas pueden tener métodos abstractos
    y métodos concretos (con implementación);

    - No se pueden crear instacias directamente de una clase abstracta.

    */

    abstract class Ordenador{

        public $encendido;

        abstract public function encender();

        public function apagar(){
            $this->encendido = false;
        }
    }

    class PcAsus extends Ordenador{

        public $software;

        public function encender()
        {
            $this-> encendido = true;
        }

        public function arrancarSoftware(){
            $this->software = true;
        }
    }