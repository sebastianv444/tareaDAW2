<?php

    class Utils{

        public static function borrarSesion($nombre){
            if (isset($_SESSION[$nombre])) {
                /* el null es porque se te puede quedar la sesion en el front con datos, y 
                es buena practica hacer esto. */
                $_SESSION[$nombre] = null;
                unset($_SESSION[$nombre]);
            }
        }

    }