<?php

    session_start();

    $usuarioDefault = 'sebastianv444';
    $contraseñaDefault = '123';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['user']) && isset($_POST['password'])){

            $usuario = (string)trim($_POST['user']);
            $contraseña = (string)trim($_POST['password']);

            if($usuario === $usuarioDefault && $contraseña === $contraseñaDefault){
                $_SESSION['user'] = [
                    'usuario' => $usuario,
                    'contraseña' => $contraseña
                ];

                header('Location:index.php');
                exit();
            }else{
                header('Location:index.php?error=1');
            }
        }
    }

?>