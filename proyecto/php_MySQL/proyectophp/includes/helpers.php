<?php 

    //librería de funciones auxiliares
    function mostrarError($errores,$campo){
        $alerta= '';
        if(isset($errores[$campo]) && !empty($campo)){
            $alerta="<div class='alerta alerta-error'>.$errores[$campo].</div>";
        }
        return $alerta;
    }

?>