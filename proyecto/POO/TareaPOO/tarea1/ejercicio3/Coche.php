<?php

    require_once "Vehiculo.php";

    class Coche extends Vehiculo{

        private $numeroDePuertas;

        public function __construct($numeroDePuertas = null)
        {
            $this->numeroDePuertas = $numeroDePuertas;
        }

        public function descrbir()
        {
            return parent::descrbir() . "<br>Numero De Puertas: " . $this->numeroDePuertas;
        }

    }