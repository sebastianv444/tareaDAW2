<?php 

require_once 'models/usuario.php';

class UsuarioController {
    public function index() {
        echo "controlador de Usuario";
    }

    public function registro() {
        require_once 'views/usuario/registro.php';
    }

    public function salvar() {
        if(isset($_POST)){
          //  var_dump($_POST);

            //comprobar si los campos vienen rellenos
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;

            if($nombre && $apellidos && $email && $password) {
                $usuario = new Usuario();
                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setEmail($email);
                $usuario->setPassword($password);

                $salvar = $usuario->salvar();

                if($salvar) {
                    $_SESSION['registro'] = "completado";
                }else{
                    $_SESSION['registro'] = "fallo";
                }  
            }else{
                // si algú campo viene vacío:
                $_SESSION['registro'] = "fallo";
            }
        }else {
            $_SESSION['registro'] = "fallo";
        }
        header('Location: index.php?controller=Usuario&action=registro');
    }

    public function login() {
        if(isset($_POST)) {
            // identificar al usuario
            // consultar la bbdd
          // var_dump($_POST);
          
            $usuario = new Usuario();            
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);

            $identidad = $usuario->login();
           /*  var_dump($identidad);
            die(); */
            
            //creo una sesión de usuario
            if($identidad && is_object($identidad)) {
                $_SESSION['identidad'] = $identidad;
                // comprobar si el rol es admin
                // TODO
            }else {
                $_SESSION['error_login'] = "Indentificación fallida";
            }
        }
        header("Location: index.php");
    }
}