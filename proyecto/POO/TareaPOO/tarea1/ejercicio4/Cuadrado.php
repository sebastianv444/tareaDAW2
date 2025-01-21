<?php

    require_once "Figura.php";

    class Cuadrado extends Figura{
    
        private $lado;

        public function __construct($lado = null)
        {
            if($lado !== null){
                $this->lado = $lado;
            }
        }

        public function calcularArea()
        {
            return $this->lado * $this-> lado;
        }
        
    }