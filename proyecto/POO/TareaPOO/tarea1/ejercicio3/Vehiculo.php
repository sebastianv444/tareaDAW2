<?php

        class Vehiculo {

        protected $marca;
        protected $modelo;

        public function descrbir(){
            return "marca: ". $this->marca . "<br>modelo: ". $this->modelo;
        }    

    }