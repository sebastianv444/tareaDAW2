<?php

    $file = 'archivo.txt';

    //abrir el archivo en modo escritura
    /* ojo recuerda que si da warnings es por que si estas en linux tienes 
    que darle permisos en la caperta donde estas programando desde la konsole 
    para poder usarlo. */
    //abrir el archivo en modo escritura.
    $archivo = fopen($file,'w');

    //comprobamos si se abrió correctamente:
    if($archivo){
        fwrite($archivo,'esto es una primera línea');
        fwrite($archivo,'esto es otra segunda línea');
    
        
        fclose($archivo);
        echo 'archivo creado correctamente';
    }else{
        echo "Error al abrir el archivo";
    }

    //V

?>