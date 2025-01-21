<?php

    $mi_directorio = "mis_archivos";

    //verificamos si existe el directorio.
    if(!is_dir($mi_directorio)){
        //creamos el directorio.
        mkdir($mi_directorio);
        echo "se te acaba de crear el directorio: $mi_directorio";
    }else{
        echo "el directorio ya existe";
    }

?>