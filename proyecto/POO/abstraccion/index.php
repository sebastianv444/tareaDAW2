<?php

    require_once "abstraccion.php";

    $ordenador = new PcAsus();

    $ordenador->arrancarSoftware();
    $ordenador->encender();
    $ordenador->apagar();
    var_dump($ordenador);
    