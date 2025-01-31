<?php
    require_once 'models/Profesor.php';
    class ProfesorController{
        public function Login(){
            if(isset($_POST)){
                $profesor = new Profesor();
                $emailVista = isset($_POST['email']) ? $_POST['email'] : null;
                $login = $profesor->Login($emailVista);

                if($login){
                    $_SESSION['profesor'] = true;
                    header("refresh: 2; url=?index.php?controller=Profesor?action=Dashboard");
                    echo "<h2 style='color: green>Registrado Correctamente<h2>'";
                    $_SESSION['navProfe'] = true;
                }else{
                    $_SESSION['profesor'] = false;
                }
            }
            
        }

        public function Dashboard(){
            require_once "views/Profesores/dashboard.php";
        }

        public function MostrarVistaSolo(){
            require_once 'views/Profesores/login.php';
        }

        public function Logout(){
            unset($_SESSION['profesor']);
        }
    }