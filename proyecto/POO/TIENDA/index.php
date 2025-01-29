<?php
session_start();
/* Este session start hace que todos los controladores que hayan usado sessiones en el mismo 
controlador puedan usarlo sin estar haciendo un session_start() en cada controlador. */

//CONTROLADOR FRONTAL
require_once "helpers/utils.php";
require_once "./autoload.php";
require_once "config/db.php"; /* es mejor requerir la base de datos en el index 
para no estar requiriendo uno a uno en cada clase de los modelos */
require_once "config/parameters.php";
require_once 'views/layouts/header.php';
require_once 'views/layouts/sidebar.php';

/* Creando controladores dinamicos segun el controlador que le pases por la url. */
if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'] . 'Controller';
    // http://localhost/proyecto/POO/TIENDA/?controller=Usuario&action=mostrarTodos
} elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
    $nombre_controlador = controller_default; // estamos llamando a la constante de parameters.
} else {
    echo "La página que buscas no existe con ese nombre controlador";
    // el exit() finaliza el script y deja de ejecutarse.
    exit();
}

if (class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();
    
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
        $accion_por_defecto = action_default;
        $controlador->$accion_por_defecto();
    }else {
        echo "La pagina que buscas no existe....";
    }
} else {
    echo "el controlador no existe";
}

require_once 'views/layouts/footer.php';
