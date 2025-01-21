<?php

    require_once 'includes/conexion.php';

    if(isset($_POST)){
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        //consulta a la base de datos para comprobar las credenciales del usuario
        /* recuerda que para ejecutar una variable string en una consulta sql tienes que poner 
        las comillas simples y luego la variable con el $ */
        $sql = "SELECT * FROM usuarios WHERE email = '$email';";

        //es un booleano, pero tambien obtienes el resultado de la consulta. 
        $login = mysqli_query($db,$sql);
        //el mysqli_num_rows si el numero de filas de la consulta es 1 es un true;
        if($login && mysqli_num_rows($login) == 1){
            //esto retorna un array asociativo de los campos y sus valores de la base de datos;
            $usuario = mysqli_fetch_assoc($login);
            /* password_verify() hashea la contraseña que le pasas solo para comparar
            si las contraseñas son iguales.Sin embargo, no modifica el $password original.   */
            $verificar = password_verify($password,$usuario['password']);
            
            if($verificar){
                //utilizo una sesión para guardar los datos del usuario al loguearse
                $_SESSION['usuario'] = $usuario;
                
                //BORRAR ERROR LOGIN SI EXISTE;
                if(isset($_SESSION['error_login'])){
                    $_SESSION['error_login'] = null;
                    unset($_SESSION['error_login']);
                }
            
            }else{
                //si algo falla enviar una sesión con el fallo
                $_SESSION['error_login'] = '!Login correcto!';
            }

        }else{
            $_SESSION['error_login'] = '!Login incorrecto!';
        }

    }

    header('Location: index.php');

?>