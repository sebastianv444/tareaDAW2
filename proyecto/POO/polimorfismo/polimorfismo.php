<?php

    /* 
        POLIMORFISMO:

        Permite que un mismo método o función pueda comportarse de diferentes maneras
        dependiendo del objeto que lo utilice.

        Es la capacidad de usar una misma interfaz o método en clases distintas
        para realizar acciones específicas según la clase que lo implemente.

    */

    // 1. usar polimorfismo con interfaces

    interface Animal{
        public function hacerSonido();
    }
    /* OJO: cuidado con las cosas publicas, ya que se comparten en todos tus directorios y puede
    saltar errores cuando llamas a una interfaz o clase igual que otra existente.*/
    class Perro implements Animal{
        public function hacerSonido(){
            return "guau guaua";
        }
    }

    class Gato implements Animal{
        public function hacerSonido()
        {
            return "miauuuuuu";
        }
    }

    class Vaca implements Animal{
        public function hacerSonido()
        {
            return "muuuuuu";
        }
    }

    //esto es lo que ayuda a polimorfismo, ya que no sabes que animal le vas a pasar.
    function escucharAnimal(Animal $animal) {
        echo "el animal dice: " . $animal->hacerSonido()."<br/>";
    }

    $perro = new Perro();
    $gato = new Gato();
    $vaca = new Vaca();

    escucharAnimal($perro);
    escucharAnimal($gato);
    escucharAnimal($vaca);

    //polimorfismo con clases abstractas.

    abstract class Figura {
        abstract public function calcularArea():float;
    }

    class Rectangulo extends Figura{
        private $ancho;
        private $alto;

        public function __construct($ancho,$alto){
            $this->ancho = $ancho;
            $this->alto = $alto;
        }
        
        public function calcularArea():float
        {
            return $this->alto * $this-> ancho;
        }

    }

    class Circulo extends Figura {
        private $radio;
        
        public function __construct($radio)
        {
            $this->radio = $radio;
        }

        public function calcularArea(): float
        {
            return 3.14 * $this-> radio * $this->radio;
        }
    }

    function mostrarArea(Figura $figura){
        echo "El área de la figura es: " . $figura->calcularArea() . "<br/>";
    }

    $rectangulo = new Rectangulo(5,10);
    $circulo = new Circulo(18);

    mostrarArea($rectangulo);
    mostrarArea($circulo);