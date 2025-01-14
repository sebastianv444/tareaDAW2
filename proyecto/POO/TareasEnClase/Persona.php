<?php

    class Persona{

        protected $nombre;
        protected $edad; 

        protected function __construct($nombre = null,$edad = null)
        {
            if($nombre !== null){
                $this->nombre = $nombre;
            }
            if($edad !== null){
                $this->edad = $edad;
            }
        }

        public function getNombre()
        {
                return $this->nombre;
        }

        public function getEdad(){
                return $this->edad;
        }

    }

    class Alumno extends Persona{

        private $calificaciones = [];

        public function getCalificaciones()
        {
                return $this->calificaciones;
        }

        public function setCalificaciones($calificaciones)
        {
                $this->calificaciones = $calificaciones;

        }

        public function añadirCalificacion($calificacion){
            if ($calificacion >= 0 && $calificacion <= 10) {
                array_push($this->calificaciones, $calificacion);
            }else{
                echo "calificación inválida";
            }
        }

        private function promedio(){
            if(count($this->calificaciones) === 0){
                return 0;
            }else{
                /* El array_sum devuelve la suma de los valores de un array, pero si usamos un array_sum en un array con nada da error */
                return array_sum($this->calificaciones) / count($this->calificaciones);
            }
        }

        public function mostrarInformacion(){
            // este number_format retorna un string de un numero con 2 digitos.
            $promedio = $this->promedio();
            return "<h2>INFORMACION DEL ALUMNO</h2>"
            . "nombre: " .parent::getNombre() . "<br> edad: " 
            . parent::getEdad() . "<br>promedio: " . number_format($promedio,2);
        }

    }

    class Profesor extends Persona{

        private $asignatura;

        public function __construct($nombre, $edad, $asignatura = null)
        {
            parent::__construct($nombre,$edad);
            if($asignatura !== null){
                $this->asignatura = $asignatura;
            }
        }

        public function getAsignatura()
        {
                return $this->asignatura;
        }

        public function setAsignatura($asignatura)
        {
                $this->asignatura = $asignatura;
        }

        public function mostrarInformacion(){
            return "<h2>INFORMACION DEL PROFESOR</h2>"
            . "nombre: " . $this-> nombre . "<br> edad: " 
            . $this-> edad . "<br>Asignatura: " . $this-> asignatura;
        }

    }

    class Escuela{

        private $alumnos = [];
        private $profesores = [];

        public function añadirAlumno(Alumno $alumno){
            array_push($alumnos,$alumno);
        }

        public function añadirProfesor(Profesor $profesor){
            array_push($profesores,$profesor);
        }

        public function listarAlumnos(){
            foreach ($this->alumnos as $alumno) {
                echo $alumno->mostrarInformacion(). "<br/>";
            }
        }

        public function listarProfesores(){
            foreach ($this->profesores as $profesor) {
                echo $profesor->mostrarInformacion(). "<br/>";
            }
        }

        public function mostrarInformacionAlumno($nombre){
            foreach($this->alumnos as $alumno){
                if($alumno->getNombre() == $nombre){
                    echo $alumno->mostrarInformacion . "<br/>";
                    return;
                }
            }
            echo "alumno no encontrado";
        }
    }

    // creamos una escuela
    $escuela = new Escuela();

    // creamos alumnos
    $alumno1 = new Alumno("juan",20);
    $alumno1->añadirCalificacion(8);
    $alumno1->añadirCalificacion(7);

    $alumno2 = new Alumno("Ana",21);
    $alumno2->añadirCalificacion(8);
    $alumno2->añadirCalificacion(9);

    //creamos profesores
    $profesor1 = new Profesor("carlos", 37, "Historia");
    $profesor2 = new Profesor("María", 36, "Matemáticas");

    // añadimos alumnos y profesores a la escuela.

    $escuela->añadirAlumno($alumno1);
    $escuela->añadirAlumno($alumno2);

    $escuela->añadirProfesor($profesor1);
    $escuela->añadirProfesor($profesor2);

    // listar alumnos y profesores
    echo "ALUMNOS: <br>";
    $escuela->listarAlumnos();

    echo "PROFESORES: <br>";
    $escuela->listarProfesores();

    // Buscar información de un alumno
    echo "<br/> Información de alumno/a : <br>";
    $escuela->mostrarInformacionAlumno("Ana");
    $escuela->mostrarInformacionAlumno("pepe");