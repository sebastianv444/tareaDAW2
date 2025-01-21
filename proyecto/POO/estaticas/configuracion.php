<?php

    //los métodos o propiedades estáticas no necesitan ser instaciados
    class Configuracion{
        /* una constante no es una variable estatica, pero se accede a ella como si fuera
        una estatica. Tambien, por buenas practicas las constantes siempre se escriben en
        mayusculas y sin el dolar. */
        /* las constantes no se heredan. */
        const URL_COMPLETA = "http://localhost";
        public static $color;
        public static $entorno;

        /* Cuando estamos manejando propiedades o funciones estaticas, estas se manejaran 
        con self:: , en este caso usamos self:: sirve para referirnos a una propiedad 
        estatica o metodo estatico. */
        
        public static function getColor(){
            return self::$color;
        }

        public static function setColor($color){
            return self::$color;
        }

        public static function getEntorno(){
            return self::$entorno;
        }

        public static function setEntorno($entorno){
            return self::$entorno;
        }

    }