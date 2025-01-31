<?php
// index.php (Controlador Frontal)
require_once './autoload.php';
require_once 'config/db.php';

// Definir la ruta base
define('BASE_URL', '/ejercicios/DAW2-CLASE/POO/coches-modernos/');

if(isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller'] . 'Controller';
}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
    $nombre_controlador = 'CategoriasController';
}else{
    echo 'La página que buscas no existe';
    exit();
}

if(class_exists($nombre_controlador)){
    $controlador = new $nombre_controlador();

    if(isset($_GET['action']) && method_exists($controlador,$_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
    }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
        $accion_por_defecto = 'index';
        $controlador->$accion_por_defecto();
    }else{
        echo "la accion que buscas no existe";
    }
}else{
    echo "El controlador que buscas no existe..";
}