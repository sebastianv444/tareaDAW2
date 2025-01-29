<?php

    require_once "models/Usuario.php";

    class UsuarioController {
        public function index(){
            echo "controlador de USUARIO";
        }

        public function registro(){
            require_once "views/usuario/registro.php";
        }

        public function salvar(){
            echo "paso por el salvar";
            if(isset($_POST)){

                //comprobaciones si no estan vacios, tambien podiamos hacer si son strings etc.. 
                $nombre = isset($_POST['nombre']) ? $_POST['nombre']:false;
                $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos']:false;
                $email = isset($_POST['email']) ? $_POST['email']:false;
                $password = isset($_POST['password']) ? $_POST['password']:false;
                
                if($nombre && $apellidos && $email && $password){
                    $usuario = new Usuario();
                    $usuario->setNombre($nombre);
                    $usuario->setApellidos($apellidos);
                    $usuario->setEmail($email);
                    $usuario->setPassword($password);

                    //devuelve un booleano si se salva correctamente.
                    $salvar = $usuario->salvar();

                    if($salvar){
                        /* RECUERDA!!: el session start se lo hago en el index para
                        que si mas controladores usan las sesiones puedan usarlo sin hacer
                        un session start en cada controlador. */ 
                        $_SESSION['registro'] = "completado";
                    }else{
                        $_SESSION['registro'] = "fallo";
                    }

                }else{
                    // si algún campo viene vacío
                    $_SESSION['registro'] = "fallo";
                }
            }else{
                $_SESSION['registro'] = "fallo";
            }
            /* OJO: cuando se repite mucho codigo como esto, se crea un funcion aparte como 
            un helpers para reusar el codigo reutilizable. */

            header('Location: index.php?controller=Usuario&action=registro');
        }

        public function login(){
            if(isset($_POST)){
                //identificar al usuario
                //consultar la bbdd
                $usuario = new Usuario();
                /* var_dump($_POST); */
                
                //traemos por post los datos ingresados por formulario.
                $usuario->setEmail($_POST['email']);
                $usuario->setPassword($_POST['password']);

                $identidad = $usuario->login();
                /* OJO: muy importante como buenas practicas ver el valor de una variable de lo 
                que obtiene el resultado con un var_dump. */
                /* var_dump($identidad); */

                //creo una sesión de usuario.
                if($identidad && is_object($identidad)){
                    $_SESSION['identidad'] = $identidad;
                    
                    //comprobar si el rol es admin.
                    if($identidad->rol == 'admin'){
                        $_SESSION['admin'] = true;
                    }
                }else{
                    $_SESSION['error_login'] = "Indentificación fallida";
                }
            }
            //OJO: base_url es una constante declarada en parameters.
            header("Location: index.php");
        }

        public function logout(){
            if(isset($_SESSION['identidad'])){
                unset($_SESSION['identidad']);
            }
            if(isset($_SESSION['admin'])){
                unset($_SESSION['admin']);
            }
           header('Location: index.php');
        }
    }