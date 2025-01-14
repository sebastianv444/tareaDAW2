<?php

    /* abstract class Animal{

        protected $nombre;

        public function __construct($nombre)
        {
            $this->nombre = $nombre;
        }

        // método abstracto que implementarán las clases hijas
        abstract public function hacerSonido();

        // método concreto que pueden usar todas las clases hijas
        public function presentarse(){
            return "Soy " . $this->nombre;
        }

    } */

    class Perro extends Animal{

        public function hacerSonido()
        {
            return "Guau guau";    
        }

    }

    class Gato extends Animal{

        public function hacerSonido()
        {
            return "Miau miau miau";
        }

    }

    /* $miPerro = new Perro("max");
    echo $miPerro->presentarse()."<br/>";
    echo $miPerro->hacerSonido()."<br/>";

    $miGato = new Gato("Nini");
    echo $miGato->presentarse()."<br/>";
    echo $miGato->hacerSonido()."<br/>"; */