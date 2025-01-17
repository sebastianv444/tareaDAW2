<?php

    require_once "articulo.php";

    class ProductoElectronico extends Articulo{

        public function __construct($nombre,$precio)
        {
            $this->nombre = $nombre;
            $this->precio = $precio;
        }

        public function calcularImpuestos(): float
        {
            return $this->precio * 0.18;
        }

        public function mostrarInformacion(){
            return "Precio: {$this->precio}<br>Impuesto: " . $this->calcularImpuestos();
        }
    }