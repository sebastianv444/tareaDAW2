<?php

    abstract class Articulo{
        protected $nombre;
        protected $precio;

        abstract public function calcularImpuestos():float;
    }