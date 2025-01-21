<?php

    require_once "Vehiculo.php";

    class Moto extends Vehiculo{

        private $tipoDeManillar;

        public function __construct($tipoDeManillar = null)
        {
            if($tipoDeManillar !== null){
                $this->tipoDeManillar = $tipoDeManillar;
            }
        }

        public function descrbir()
        {
            return parent::descrbir() . "<br>Tipo De Manillar: " . $this->tipoDeManillar;
        }

    }