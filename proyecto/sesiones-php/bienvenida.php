<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        echo ("bienvenido ". $_SESSION['usuario']);
    }else{
        echo 'no has iniciado sesión';
    }

?>

<a href="logout.php">Ir a la logout </a>