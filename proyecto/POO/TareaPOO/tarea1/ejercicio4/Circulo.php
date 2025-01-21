<?php

    require_once "Figura.php";

    class Circulo extends Figura{

        private $radio;

        public function calcularArea()
        {
            return 3.14 * $this-> radio * $this->radio;
        }

        public function getRadio()
        {
                return $this->radio;
        }

        public function setRadio($radio)
        {
                $this->radio = $radio;
        }
    }