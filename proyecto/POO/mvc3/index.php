<h1>Bienvenido</h1>
<?php

//CONTROLADOR FRONTAL
require_once "./autoload.php";

/* Creando controladores dinamicos segun el controlador que le pases por la url. */
if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'] . 'Controller';
    // http://localhost/proyecto/POO/mvc3/?controller=Usuario&action=mostrarTodos
} else {
    echo "La página que buscas no existe con ese nombre controlador";
    // el exit() finaliza el script y deja de ejecutarse.
    exit();
}

if (class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();

    /* enrutamiento dinamicó */
    /* method_exists: este verifica si el metodo existe en la clase o objeto, 
    retorna un boleado */
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        /* 
        Esto hace que si le pasamos por get en la url por ejemplo action=mostrarTodos te
        llama dinamicamente a algun metodo de la clase o objeto seleccionado
        para mostrartelo.
        */
        $action = $_GET['action'];
        $controlador->$action();
        // http://localhost/proyecto/POO/mvc3/?action=mostrarTodos
    } else {
        echo "La pagina que buscas no existe....";
    }
}else{
    echo "el controlador no existe";
}