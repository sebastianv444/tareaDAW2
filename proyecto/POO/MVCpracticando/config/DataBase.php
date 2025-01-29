<?php

    class Database{
        /* Lo declaramos como estatico para poder reutilizarlo, ya que de no hacerlo
        estatico, estariamos creando instancias nuevas cada vez que llamemos a esta 
        clase */
        private static $db;

        public static function crearConexion(){
            // __DIR__ coge la ruta absoluta hasta llegar a /config/dbDatos.php
            $config = require __DIR__ . '/config/dbDatos.php';
        }
    }