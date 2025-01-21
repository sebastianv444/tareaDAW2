<?php
    session_start();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $usuario = isset($_POST['usuario']) && !empty($_POST['usuario']) ? strip_tags(trim($_POST['usuario'])) :null;
        $contraseña = isset($_POST['contraseña']) && !empty($_POST['contraseña']) ? trim($_POST['contraseña']) :null;
        $logueado = false;

        if(isset($usuario) && isset($contraseña)){

            foreach($_SESSION['usuarios'] as $fila){
                if($usuario == $fila['usuario'] && password_verify($contraseña,$fila['contraseña'])){
                    $logueado = true;
                    header('Location:dashboard.php');
                    exit();
                };
            }

            if(!$logueado){
                header('Location:index.php?noExiste');
            }

        }else{
            header('Location:index.php?error');
        };
    
    }

?>