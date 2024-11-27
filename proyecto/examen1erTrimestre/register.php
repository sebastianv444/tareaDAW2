<?php
session_start();
$registerNav = '';
$h1Form = 'Registrate';
$rutaForm = 'register.php';
$boton = 'registrarse';
$registro = true;
include 'index.php';?>

<?php 

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $usuario = isset($_POST['usuario']) && !empty($_POST['usuario']) ? strip_tags(trim($_POST['usuario'])):null;
        $contraseña = isset($_POST['contraseña']) && !empty($_POST['contraseña']) ? password_hash(trim($_POST['contraseña']),PASSWORD_DEFAULT):null;

        if(isset($usuario) && isset($contraseña)){
            if(!isset($_SESSION['usuarios'])){
                $_SESSION['usuarios'] = [];
            }

            $_SESSION['usuarios'][] = [
                'usuario' => $usuario,
                'contraseña' => $contraseña
            ];

            header('Location:index.php');
        }else{
            header('Location:register.php?error');
        }
    }

?>