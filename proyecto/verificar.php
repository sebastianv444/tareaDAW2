<?php

    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];

    //edad limpia los espacios
    trim($nombre,$email,$edad);
    //para verificar si en esta variable existe un '.'
    strpos($nomrbe,'.');
    //PARA COMPROBAR QUE LO QUE VIENE EL METODO ES UN POST
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(empty($nombre)||empty($email)){
            echo'recuerda no dejar en blanco alguno de los cacilleros';
            return;
        }
        
        else if($edad <= 0 || $edad <18){
            echo 'tienes que ser mayor';
            return;
        }

        echo 'Bienvenido '.$nombre;
    };

?>
