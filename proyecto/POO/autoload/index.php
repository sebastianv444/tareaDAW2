<?php

    require_once "autoload.php";

    /* 
        El autoload nos ayuda a omitir el estar requieriendo uno a uno todas las clases.
    */

    $categoria = new Categoria();
    echo $categoria->titulo . "<br>";

    $usuario = new Usuario();
    echo $usuario->nombre . "<br>";