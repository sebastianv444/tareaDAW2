<?php

    class Database {
        // esto retorna una conexion a la base de datos.
        /* es mala practica declarar una variable con la conexion estatica por fuera de una funcion
        como un atributo. */
        public static function conectar(){
            $db = new mysqli("localhost", "root","","tienda_master");
            $db->query("SET NAMES 'utf8'");
            return $db;
        }

        
    }