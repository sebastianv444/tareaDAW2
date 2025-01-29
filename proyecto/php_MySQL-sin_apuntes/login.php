<?php

require_once 'includes/conexion.php';

if(isset($_POST)) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

// consulta a la base de datos para comprobar las credenciales del usuario
$sql = "SELECT * FROM usuarios WHERE email = '$email'";

$login = mysqli_query($db, $sql);

if($login && mysqli_num_rows($login) == 1) {
    $usuario = mysqli_fetch_assoc($login);

    // var_dump($usuario);
    // die();

    $verificar = password_verify($password, $usuario['password']);

    if($verificar) {
        // utilizo una sesión para guardar los datos del usuario al loguearse
        $_SESSION['usuario'] = $usuario;

        // BORRAR ERROR LOGIN SI EXISTE

            if(isset($_SESSION['error_login'])) {
                $_SESSION['error_login'];
                unset($_SESSION['error_login']);
            }

    }else {
        // si algo falla enviar una sesión con el fallo
        $_SESSION['error_login'] = "¡Login incorrecto!";
    }

} else {
    $_SESSION['error_login'] = "¡Login incorrecto!";
}

}

header('Location: index.php');