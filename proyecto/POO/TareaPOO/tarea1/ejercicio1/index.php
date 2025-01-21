<?php
    require_once 'CuentaBancaria.php';

    $cuenta = new CuentaBancaria(100);

    $cuenta-> depositar(50);

    echo "tu saldo despues de depositar es de: " . $cuenta->obtenerSaldo() . "<br>";

    $cuenta-> retirar(100);
    
    echo "tu saldo despues de retirar es de: " . $cuenta->obtenerSaldo();

?>