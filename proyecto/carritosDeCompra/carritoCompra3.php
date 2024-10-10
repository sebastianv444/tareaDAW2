<?php

    session_start();

    //simulacion de los datos que llegan por un formulario o una
    $producto = "pantalones";
    $cantidad = 2;
    $produto2 = "jersey";
    $cantidad2 = 1;

    //verificamos si el carrito existe
    if(!isset($_SESSION['carrito2'])){
        $_SESSION['carrito2'] = [];
    } 
    /*este isset ve si existe carrito2 y producto. Recuerda que dentro del isset puedes separar las variables
    por comas o corchetes*/
    if(isset($_SESSION['carrito2'][$producto]) &&
    isset($_SESSION['carrito2'][$produto2])){
        $_SESSION['carrito2'][$producto] = $cantidad;
        $_SESSION['carrito2'][$producto2] = $cantidad2;
    }
    echo 'productos agregados </br>';

    foreach($_SESSION['carrito2'] as $p => $a){
        echo "<li>producto $p - cantidad: $a";
    }

    exit();

?>