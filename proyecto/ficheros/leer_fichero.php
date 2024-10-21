<?php

    $file = 'archivo.txt';

    if(file_exists($file)){
        //leemos el contenido del fichero
        $contenido = file_get_contents($file);
        echo "<pre> $contenido </pre>";
    }else{
        echo "el archivo no existe";
    }

?>