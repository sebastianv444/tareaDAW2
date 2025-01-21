<?php
    session_start();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['user']) && isset($_POST['password'])){

            $usuario = (string)htmlspecialchars(trim($_POST['user']));
            $contraseña = (string)htmlspecialchars(trim($_POST['password']));
        
            if(!empty($_POST['user']) && !empty($_POST['password'])){

                $contraseñaSegura = password_hash($contraseña,PASSWORD_DEFAULT);

                if(!isset($_SESSION['user'])){
                    $_SESSION['user'] = [];
                }

                if(isset($_SESSION['user'])){
                    $_SESSION['user'][] = [
                        'usuario' => $usuario,
                        'contraseña' => $contraseñaSegura
                    ];

                    $directorio = getcwd().'\BBDD';
                    $archivo = $directorio .'\BaseDeDatos.txt';

                    if(!is_dir($directorio)){
                        mkdir($directorio);
                    }

                        $puntero = fopen($archivo,'w');
                        foreach($_SESSION['user'] as $fila){
                            fwrite($puntero,"USUARIO: {$fila['usuario']}\nCONTRASEÑA: {$fila['contraseña']}\n\n");
                        }
                        
                    fclose($puntero);
                }
            
                header('Location:index.php');
                exit();
            }else{
                header('Location:registrarte.php?error=vacio');
                exit();
            }
        }


    }


?>