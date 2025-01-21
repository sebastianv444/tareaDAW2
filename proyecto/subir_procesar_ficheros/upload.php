<?php

    $archivo = $_FILES['archivo'];

    //php.ini fichero de configuracón
    // opt/ampp/etc/php.ini

    /* estas propiedades como nombre y tipo son propiedades default que se 
    pueden acceder de un archivo seleccionado para que */
    $nombre = $archivo['name'];
    $tipo = $archivo['type'];

    if($tipo === 'image/jpg' || $tipo === 'image/jpeg'
    || $tipo === 'image/png' || $tipo === 'image/gif'){
        if(!is_dir('images')){
            //con esto creo la carpeta a la vez que le da permisos de todo tipo como si se usara el chmod.
            mkdir('imagenes',0777);
        }
        move_uploaded_file($archivo['tmp_name'],'imagenes/'.$nombre);
        //con esto una vez subido nos quedamos 3 segundos en la pagina.
        header('Location:subida_ficheros.php');
        echo "imagen subida correctamentes";
    }else{
        echo "no es un formato correcto para subir";
    }

?>