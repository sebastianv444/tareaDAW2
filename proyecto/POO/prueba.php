<?php 

    class Coche{

        //definimos los atributos o propiedades de la clase.
        private $color;
        public $modelo;
        public $velocidad;
        public $caballos;
        public $plazas;

        //Métodos (en programación estructurada sería las funciones).

        public function getColor(){
            //operador $this para referirnos a una propiedad de la clase (acceder a ellas).
            // this significa busca en esta clase la propiedad(o metodo) x

            return $this->color;
        }

        public function setColor($micolor){
            $this->color = $micolor;
        }
        
        public function acelerar(){
            $this->velocidad++;
        }

        public function frenar(){
            $this->velocidad--;
        }
        
    };

    //instanciamos un objeto de tipo coche

    $coche = new Coche();
    $coche->setColor("verde");
    $coche->velocidad = 100;
    
    echo "el color del coche es: " . $coche->getColor();
    
    $coche->acelerar();
    $coche->acelerar();
    $coche->acelerar();
    echo "\n la velocidad de tu coche es de: ".$coche->acelerar();

?>