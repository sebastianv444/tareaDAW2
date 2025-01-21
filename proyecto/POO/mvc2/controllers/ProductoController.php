<?php

    class Producto{
        private $modelo;

        public function __construct()
        {
            /* Esto luego importaremos en el index el Producto.php */
            $this->modelo = new Producto();
        }

        public function index(){
            // obtener todos los productos y pasarlos a la vista
            $productos = $this->modelo->obtenerTodos();

            require 'views/productos/index.php';
        }

        public function crear(){
            
        }

    }