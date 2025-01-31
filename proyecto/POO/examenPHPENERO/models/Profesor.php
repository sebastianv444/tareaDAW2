<?php

    class Profesor{
        private $db;
        private $nombre;
        private $apellido;
        private $email;

        public function __construct()
        {
            $this->db = DataBase::connect();
        }

        public function getNombre()
        {
            return $this->nombre;
        }
 
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        public function getApellido()
        {
            return $this->apellido;
        }

        public function setApellido($apellido)
        {
            $this->apellido = $apellido;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function Login($post){
            $sql = "SELECT email FROM profesores;";
            $emails = $this->db->query($sql);
            $registrado = false;
            while($em = $emails->fetch_object()){
                if($em->email == $post){
                    $registrado = true;
                }
            }

            return $registrado;
        }
    }