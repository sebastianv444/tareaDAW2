<?php

    require_once "configuracion.php";

    Configuracion::setColor("azul");
    Configuracion::setEntorno("localhost");

    echo Configuracion::$color. "<br/>";
    echo Configuracion::$entorno. "<br/>";

    // acceder a una constante
    echo Configuracion::URL_COMPLETA;