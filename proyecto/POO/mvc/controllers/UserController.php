<?php

    // Este controllers es el que se encarga de comunicarse con la vista.

    /* ponemos sin los ../ al principio, ya que esto que se va usar en el index principal
    de nuestra aplicacion y va tener que estar al mismo nivel de carpetas */
    require_once "models/User.php";

    class UserController{
        
        // Método para mostrar la lista de usuarios
        /* se le pone de nombre index que sirve para inicializar, pero no es
        obligatorio solo que casi siempre ponen ese nombre */
        public function index(){
            // obtenemos los usuarios del modelo
            $users = User::all();

            // pasamos los datos a la vista.
            /* ponemos sin los ../ al principio, ya que esto que se va usar en el index principal
            de nuestra aplicacion y va tener que estar al mismo nivel de carpetas */
            require 'views/users/index.php';
        }
    }