<?php

    class UsuarioController {
        public function index(){
            echo "controlador de USUARIO";
        }

        public function registro(){
            require_once "views/usuario/registro.php";
        }

        public function salvar(){
            echo "paso por el salvar";
            if(isset($_POST)){
                var_dump($_POST);
            }
        }
    }