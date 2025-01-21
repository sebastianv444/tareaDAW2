<?php

    class Producto{

        public $nombre;
        private $precio;
        private $cantidad;

        public function __construct($nombre = null,$precio = null,$cantidad = null)
        {
            if($nombre !== null){
                $this->nombre = $nombre;
            }
            if($precio !== null){
                $this->precio = $precio;
            }
            if($cantidad !== null){
                $this->cantidad = $cantidad;
            }
        }

        public function establecerPrecio($precio){
            if($precio > 0){
                $this-> precio = $precio;
            }
        }

        public function obtenerPrecio(){
            return $this->precio;
        }

        public function incrementarCantidad($cantidad){
            if($cantidad){
                $this->cantidad += $cantidad;
            }
        }

        public function disminuirCantidad($cantidad){
            if($cantidad <= $this->cantidad){
                $this->cantidad -= $cantidad;
            }else{
                return "ERROR LA DISMINUIR LA CANTIDAD";
            }
        }

        public function mostrarInformacion(){
            return "<h2> INFORMACION DEL PRODUCTO:</h2><br>". "nombre: " . $this->nombre . "<br>precio: ". $this->precio . "<br>cantidad: ". $this->cantidad;
        }

    }
    