<?php

    session_start();
    $_SESSION['usuario'] = "pepe";

    //redirigir a otra pagina
    header('location: bienvenida.php');
    exit();

?>