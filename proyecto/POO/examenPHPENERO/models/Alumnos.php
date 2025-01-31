<?php

class Alumnos
{
    private $db;
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
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

    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function AlumnosPorAsignatura()
    {
        $sql = "SELECT a.nombre,CONCAT(al.nombre,' ',al.apellido) AS Alumnos FROM asignaturas AS a
                INNER JOIN alumnos_asignaturas AS aa ON a.id_asignatura = aa.id_asignatura
                INNER JOIN alumnos AS al ON aa.id_alumno = al.id_alumno;";

        $alumnos = $this->db->query($sql);

        return $alumnos;
    }

    public function all(){
        $sql = "SELECT * FROM alumnos;";
        $all = $this->db->query($sql);

        return $all;
    }
}
