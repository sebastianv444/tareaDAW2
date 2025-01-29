<?php

    class Categoria{
        private $id;
        private $nombre;

        private $db;

        public function __construct()
        {
            $this->db = Database::conectar();
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function getAll(){
            $categorias = $this->db->query("SELECT * FROM categorias;");
            if(!$categorias){
                die("error");
            }
            return $categorias;
        }

        public function salvar(){
            $sql = "INSERT INTO categorias VALUES(null,'{$this->getNombre()}');";
            $salvar = $this->db->query($sql);
            if(!$salvar){
                die("error" . $this->db->error);
            }
        }
    }