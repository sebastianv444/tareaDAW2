<?php

session_start();

// CONTROLADOR FRONTAL


require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'helpers/utils.php';
require_once 'views/layouts/header.php';
require_once 'views/layouts/sidebar.php';

if(isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller']. 'Controller';
    
    // localhost/proyecto/POO/mvc3/?controller=Usuario&action=mostrarTodos
}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
    $nombre_controlador = controller_default;

}else {
    echo "La página que buscas no existe con ese nombre controlador";
    exit();
}

if(class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();

    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
        
    }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
        $accion_por_defecto = action_default;
        $controlador->$accion_por_defecto();
    
    }else {
        echo "la página que buscas no existe con ese controlador...";
    }
}else {
    echo " el controlador no existe";
}
   
require_once 'views/layouts/footer.php';
