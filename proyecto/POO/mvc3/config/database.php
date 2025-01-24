<?php

    class database {
        public static function conectar(){
            /* Esta es otra forma de crear una base de datos con objetos, esto equivaldria a
            un mysqli_connect(). */
            $conexion = new mysqli("localhost","root","","notas_master");

            //ejecutar consultas en POO
            $conexion->query("SET NAMES 'utf-8'");
            return $conexion;
        }
    }