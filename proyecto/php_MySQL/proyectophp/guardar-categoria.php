<?php

if(isset($_POST)){
    require_once 'includes/conexion.php';

    /* IMPORTANTE!!:este metodo de mysqli sirve para evitar inyeccion de codigo en la base de datos,ya que evita que si ingresen comillas o caracteres especiales en el input, ya que este nombre con comillas en la base de datos en una consulta daria un error  */
    //https://www.php.net/manual/es/mysqli.real-escape-string.php
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre']):false;

    //array de errores para luego mostrarla
    $errores = [];
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    }else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es válido";
    }
    
    if (count($errores)==0) {
        $sql = "INSERT INTO categorias VALUES(NULL,'$nombre');";
        //OJO!!:con este metodo del query obtienes el resultado de la consulta a la vez que se ejecuta la consulta en la base de dato, recuerda que estamos importando la conexion a la base de datos.
        $guardar = mysqli_query($db,$sql);
    }else{
        echo "error";
    }
}

header('Location: index.php');

?>