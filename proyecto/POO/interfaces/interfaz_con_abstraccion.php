<?php

    interface Volar{
        public function volar();
    }

    abstract class Ave{
        protected $nombre;

        public function __construct($nombre)
        {
            $this->nombre = $nombre;
        }

        abstract function hacerSonido();
    }

    class Aguila extends Ave implements Volar{
        public function hacerSonido()
        {
            return "kreeeeeeeeeeeeeeeekkreee";
        }

        public function volar(){
            echo "$this->nombre está volando <br/>";
        }
    }

    class Pinguino extends Ave{
        public function hacerSonido()
        {
            return "honk honk";
        }
    }

    $aguila = new Aguila("aguila real");
    echo $aguila->hacerSonido() . "<br/>";
    $aguila->volar();

    $pinguino = new Pinguino("pinguino del ártico");
    echo $pinguino->hacerSonido() . "<br/>";