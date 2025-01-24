<?php

    require_once './biblioteca.php';

    class Estudiante implements UsuarioBiblioteca{

        private $id;
        private $libros = [];

        public function __construct($id)
        {
            $this->id = $id;
        }

        public function obtenerID(){
            return $this->id;
        }

        public function prestarLibro($libro){
            array_push($this->libros,$libro);
        }

        public function mostrarInformacion(){
            return "Estudiante con ID: " . $this->id . ", libros Prestados: " . implode(",",$this->libros);
        }

    }

    class Profesor implements UsuarioBiblioteca{
        
        private $id;
        private $especialidad;

        public function __construct($id,$especialidad = null)
        {
            $this->id = $id;
            $this->especialidad = $especialidad;
        }

        public function obtenerID(){
            return $this->id;
        }

        public function mostrarInformacion(){
            return "Profesor ID: " . $this->id . ", Especialidad: " . $this->especialidad;
        }

    }

    class biblioteca{

        private $usuarios = [];

        public function agregarUsuario(UsuarioBiblioteca $usuario){
            array_push($this->usuarios,$usuario);
        }

        public function buscarUsuarioPorID($id){
            foreach ($this->usuarios as $usuario) {
                if($id === $usuario->obtenerID()){
                    return $usuario->mostrarInformacion();
                }   
            }
            return "Usuario con ID $id no encontrado.";
        }
    }