<?php 
/* 
    RECUERDA!!: que las rutas de los require siempre van orientada a la ubicacion del index
    raiz del modelo mvc.
*/
    class UsuarioController{

        public function mostrarTodos(){
            require_once "models/Usuario.php";

            $usuario = new Usuario();
            $todos_los_usuarios = $usuario->conseguirTodos('usuarios');

            require_once "views/usuario/mostrarTodos.php";

        }

        public function crear(){
            require "views/usuario/crear.php";

        }

    }

?>