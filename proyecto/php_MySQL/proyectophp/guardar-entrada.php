<?php

if(isset($_POST)){
    require_once 'includes/conexion.php';

    /* IMPORTANTE!!:este metodo de mysqli sirve para evitar inyeccion de codigo en la base de datos,ya que evita que si ingresen comillas o caracteres especiales en el input, ya que este nombre con comillas en la base de datos en una consulta daria un error  */
    //https://www.php.net/manual/es/mysqli.real-escape-string.php
    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db,$_POST['titulo']):false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db,$_POST['descripcion']):false;
    $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria']:false;
    $usuario = $_SESSION['usuario']['id'];

    //array de errores para luego mostrarla
    $errores = [];
    if(empty($titulo)) {
        $errores['titulo'] = "El titulo no es válido";
    }
    if(empty($descripcion)) {
        $errores['descripcion'] = "la descripcion no es válida";
    }
    if(empty($categoria) && !is_numeric($categoria)) {
        $errores['categoria'] = "La categoria no es válida";
    }
   
    if(count($errores) == 0){
        $sql = "INSERT INTO entradas VALUES(NULL,$usuario,$categoria, '$titulo','$descripcion', CURDATE());";
        $guardar = mysqli_query($db,$sql);
        header('Location: index.php');
    }else{
        $_SESSION['errores_entrada'] = $errores;
        header('Location: crear-entradas.php');
    }
}

?>