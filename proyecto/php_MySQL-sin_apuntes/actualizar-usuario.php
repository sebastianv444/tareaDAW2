<?php

if(isset($_POST)) {
    
    require_once './includes/conexion.php';

    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    
    // validar los datos antes de introducirlos en la base de datos:

    // creo un array de errores:

    $errores = array();

    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    }else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es válido";
    }
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
        $apellidos_validado = true;
    }else {
        $apellidos_validado = false;
        $errores['apellidos'] = "El apellido no es válido"; 
    }
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
    }else {
        $email_validado = false;
        $errores['email'] = 'El email no es válido';
    }
    
    // si el tamaño del array de errores es cero significa que no tiene errores:

        $guardar_usuario = false;
        if(count($errores) == 0) {
            $usuario = $_SESSION['usuario'];
            $guardar_usuario = true;          
            
            // actualizar el usuario en la bbdd

            $sql = "SELECT id, email FROM usuarios WHERE email = '$email'";
            $existe_email = mysqli_query($db, $sql);
            $existe_usuario = mysqli_fetch_assoc($existe_email);

            if($existe_usuario['id'] == $usuario['id'] || empty($existe_usuario)) {
                // actualizar usuario

            $sql = "UPDATE usuarios SET ". 
             "nombre = '$nombre', ". 
             "apellidos = '$apellidos', ". 
             "email = '$email' ". 
             "WHERE id = ". $usuario['id'];

             $guardar = mysqli_query($db, $sql);

             // actualizamos la sesión con los nuevos datos del usuario
             if($guardar) {
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellidos;
                $_SESSION['usuario']['email'] = $email;

                $_SESSION['completado'] = "El usuario se ha guardado correctamente";
             }else {
                $_SESSION['errores']['general'] = "¡Fallo al actualizar usuario";
            }
            }else {
                $_SESSION['errores']['general'] = "Ese email ya existe, no se puede guardar";
            }
        } else {
            $_SESSION['errores'] = $errores; 
        }            
} 

header('Location: mis-datos.php');