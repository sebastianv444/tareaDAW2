<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['user']) && isset($_POST['password'])) {
        $user = (string)htmlspecialchars(trim($_POST['user']));
        $password =  (string)htmlspecialchars(trim($_POST['password']));

        if (!empty($_POST['user']) && !empty($_POST['password'])) {
            $logueado = false;

            /* foreach($_SESSION['user'] as $fila){
                    if($user == $fila['usuario'] && password_verify($password,$fila['contraseña'])){
                        $_SESSION['userName'] = $user;
                        $logueado = true;
                        header('Location:bienvenida.php');
                        exit();
                    }
                } */


            $directorio = getcwd() . '\BBDD';
            $archivo = $directorio . '\BaseDeDatos.txt';

            if (is_readable($archivo)) {
                $file = fopen($archivo, 'r');

                $fileUser = '';
                $fileHash = '';

                while (($line = fgets($file)) !== false) {

                    if (strpos($line, 'USUARIO:') !== false) {
                        $fileUser = trim(explode(":", $line)[1]);
                    }

                    if (strpos($line, 'CONTRASEÑA:') !== false) {
                        $fileHash = trim(explode(":", $line)[1]);
                        
                        if ($user === $fileUser && password_verify($password, $fileHash)) {
                            $_SESSION['userName'] = $user;
                            $logueado = true;
                            fclose($file);
                            header('Location: bienvenida.php');
                            exit();
                        }
                    }
                }

                fclose($file);

                if (!$logueado) {
                    header('Location: index.php?error=no_encontrado');
                    exit();
                }
            }
        } else {
            header('Location:index.php?error=vacio');
            exit();
        }
    }
}
