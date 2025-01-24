<?php 
/* 
    RECUERDA!!: que las rutas de los require siempre van orientada a la ubicacion del index
    raiz del modelo mvc.
*/
    class NotasController{

        public function listar(){
            require "models/Nota.php";
            //lógica de la acción del controlador
            $nota = new Nota();
            $nota->setNombre('Pepe');
            $nota->setContenido('una nota mas');
            
            require 'views/nota/listar.php';
        }

        public function crear(){

        }

        public function borrar(){

        }

    }

?>