<?php
    require_once './loger.php';

    class Usuario{
        private $mostrar = [];
        use loger;

        public function realizarAccion($accion){
            $this->mostrar[] = loger::log($accion);
        }

        public function mostrarLog(){
            return $this->mostrar;
        }
    }

    class Administrador{
        private $mostrar = [];
        use loger;

        public function gestionarSistema($accion){
            $this->mostrar[] = loger::log($accion);
        }

        public function mostrarLog(){
            return $this->mostrar;
        }
    }