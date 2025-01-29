<?php

if(isset($_POST)) {
    require_once 'includes/conexion.php';


    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']): false;

   
    // array de errores:

    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    }else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es válido";
    }

    if(count($errores)==0) {
        $sql = "INSERT INTO categorias VALUES(NULL, '$nombre');";
        $guardar = mysqli_query($db, $sql);
    }else {
        echo "error al introducir el nombre de la categoría";
       
    }
}

header('Location: index.php');


