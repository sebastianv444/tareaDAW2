<?php

    require_once "Empleado.php";

    function mostrarSalario(Empleado $empleado){
        echo "el salario de tu empleado es: " . $empleado->calcularSalario();
    }

    $empleado1 = new EmpleadoPorHoras(12,120);
    $empleado2 = new EmpleadoTiempoCompleto(3000);

    mostrarSalario($empleado1);
    mostrarSalario($empleado2);