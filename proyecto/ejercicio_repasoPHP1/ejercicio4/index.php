<?php

    session_start();

    if(!isset($_SESSION['visitas'])){
        $_SESSION['visitas'] = 1;
    }else{
        $_SESSION['visitas']++;
    };

    echo $_SESSION['visitas'];

    if($_SESSION['visitas'] == 10){
        $_SESSION['visitas'] = [];
        session_destroy();
        echo ' SESION BORRADA CON EXITO;';
    };
    exit();
    
?>