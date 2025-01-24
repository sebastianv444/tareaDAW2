<?php

    class ProductoController{
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
            require 'views/productos/crear.php';
            
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $producto = [
                    'nombre' => $_POST["nombre"],
                    'precio' => $_POST["precio"],
                    'descripcion' => $_POST["descripcion"]
                ];
                if($this->modelo->crear($producto)){
                    header('Location: index.php?action=index');
                    return;
                }
            }
        }

    }