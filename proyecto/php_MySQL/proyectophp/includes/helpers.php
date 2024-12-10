<?php

// librería de funciones auxiliares

function mostrarError($errores, $campo) {
    $alerta = '';
    if(isset($errores[$campo]) && !empty($campo)) {
        $alerta = "<div class='alerta alerta-error'>.$errores[$campo].</div>";
    }
    
    return $alerta;
}

function borrarErrores(){

    if(isset($_SESSION['errores'])){
        /* es importante poner la session invalida, ya que si la destruimos directamente
        queda una session almacenada en el navegador */
        $_SESSION['errores'] = null;
        unset($_SESSION['errores']);
    }
    if(isset($_SESSION['completado'])){
        $_SESSION['completado'] = null;
        unset($_SESSION['completado']);
    }

}