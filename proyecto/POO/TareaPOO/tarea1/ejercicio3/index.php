<?php

    require_once "Moto.php";
    require_once "Coche.php";

    $coche = new Coche(4,"Ferrari");
    $moto = new Moto();

    echo $coche->descrbir();