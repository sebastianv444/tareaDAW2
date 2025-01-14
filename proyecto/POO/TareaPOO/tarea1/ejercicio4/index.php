<?php

    require_once "Circulo.php";
    require_once "Cuadrado.php";

    $cuadrado = new Circulo(10);
    $circulo = new Cuadrado(10);

    echo $cuadrado->calcularArea() . "<br/>";
    echo $circulo->calcularArea() . "<br/>";