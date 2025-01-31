<?php

    require_once "models/Alumnos.php";
    class AlumnosController{
        public function AlumnosPorAsignatura(){
            $alumno = new Alumnos();
            $alumnos = $alumno->AlumnosPorAsignatura();

            require_once "views/asignaturas/AlumnosPorAsignatura.php";
        }

        public function MostrarTodos(){
            $alumno = new Alumnos();
            $alumnos = $alumno->all();
            require_once "views/mostrarTodos/mostrarTodos.php";
        }
    }