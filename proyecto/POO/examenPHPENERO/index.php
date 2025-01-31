<?php
    session_start();
    require_once 'config/db.php';
    require_once 'views/layouts/header.php';
    require_once 'autoload.php';

    if(isset($_GET['controller'])){
        $nombre_controlador = $_GET['controller'] . 'Controller';
    }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
        $nombre_controlador = 'AlumnosController';
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
            $accion_por_defecto = 'AlumnosPorAsignatura';
            $controlador->$accion_por_defecto();
        }else{
            echo "la accion que buscas no existe";
        }
    }else{
        echo "El controlador que buscas no existe..";
    }
    
    require_once 'views/layouts/footer.php';