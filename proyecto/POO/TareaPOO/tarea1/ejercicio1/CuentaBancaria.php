<?php

    class CuentaBancaria{

        private $dinero;
        private $saldo;

        public function __construct($dinero = null)
        {
            if($dinero !== null){
                $this->dinero = $dinero;
            }
        }

        public function getDinero(){
            return $this->dinero;
        }

        public function setDinero($dinero){
            return $this->dinero = $dinero;
        }

        public function depositar($cantidad){
            $this->dinero += $cantidad;
        }

        public function retirar($cantidad){
            $this->dinero -= $cantidad;
        }

        public function obtenerSaldo(){
            return $this->saldo = $this->dinero;
        }
    }