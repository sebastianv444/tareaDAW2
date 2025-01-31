<?php

class DataBase
{
    public static function  connect()
    {
        $config = require_once 'config/DatosDB.php';
        $db = new mysqli(
            $config['host'],
            $config['username'],
            $config['password'],
            $config['database']
        );
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}
