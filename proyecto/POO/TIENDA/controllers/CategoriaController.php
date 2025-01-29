<?php

    require_once 'models/Categoria.php';
    class CategoriaController {
        public function index(){
            $categoria = new Categoria();
            $categorias = $categoria->getAll();
            /* OJO: por lo general los metodos se llaman igual que el nombre del archivo php 
            a mostrar */
            require_once 'views/categoria/index.php';
        }

        public function crear(){
            require_once 'views/categoria/crear.php';
        }

        public function salvar(){
            if(isset($_POST) && isset($_POST['nombre'])){
                //guardamos la categoria
                $categoria = new Categoria();
                $categoria->setNombre($_POST['nombre']);
                $categoria->salvar();
            }
        }
    }