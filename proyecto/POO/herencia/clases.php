<?php

    // posibilidad de compartir atributos y métodos entre clase.
    /* RECUERDA!!: puedes descargar la extension de getters and setters de php,
    pero recuerda que para aplicar esta extension solo tienes que seleccionar el atributo 
    desde que comienza el dolar hasta la ultima letra de la variable sin incluir lo punto 
    y comas. */

    class Persona {
        public $nombre;
        public $apellidos;
        public $edad;
        public $altura;
        
        public function getNombre()
        {
                return $this->nombre;
        }

        public function setNombre($nombre)
        {
                $this->nombre = $nombre;
        }

        public function getApellidos()
        {
                return $this->apellidos;
        }

        public function setApellidos($apellidos)
        {
                $this->apellidos = $apellidos;
        }

        public function getEdad()
        {
                return $this->edad;
        }

        public function setEdad($edad)
        {
                $this->edad = $edad;
        }

        public function getAltura()
        {
                return $this->altura;
        }

        public function setAltura($altura)
        {
                $this->altura = $altura;
        }
    }

    /* RECUERDA!!: si esta clase no tiene un cosntructor, toma el constructor de la clase
    padre. */
    class informatico extends Persona{
        public $lenguajes;
        public $experienciaProgramacion;

        public function __construct()
        {
            $this->lenguajes = "php, c++, java";
            $this->experienciaProgramacion = 10;
        }

        public function sabeLenguajes($lenguajes){
            $this->lenguajes = $lenguajes;
            return $this->lenguajes;
        }

        public function sabesProgramar(){
            return "se programar";
        }
    }

    class TecnicoRedes extends informatico{
        public $auditarRedes;
        public $experienciaRedes;

        public function __construct()
        {
            parent::__construct();
            $this->auditarRedes = "experto";
            $this->experienciaRedes = 7;
        }

        public function auditar(){
            return "estoy auditando";
        }
    }