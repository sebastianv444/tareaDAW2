<?php

    /* La carpeta config sirve para almacenar configuraciones importantes del 
    sistema en un solo lugar, como los datos de conexión a la base de datos, 
    constantes globales, ajustes generales y rutas. Esto permite que el código 
    sea más limpio, seguro y fácil de mantener. */

    class Database {
        public static function conectar(){
            $db = new mysqli("localhost", "root","","tienda_master");
            $db->query("SET NAMES 'utf8'");
            return $db;
        }
    }