<?php

require_once './clases.php';

$estudiante = new Estudiante(101);
$estudiante->prestarLibro("El Quijote");
$estudiante->prestarLibro("Cien años de soledad");

$profesor = new Profesor(202, "Literatura");

$biblioteca = new Biblioteca();
$biblioteca->agregarUsuario($estudiante);
$biblioteca->agregarUsuario($profesor);

echo $biblioteca->buscarUsuarioPorID(101) . "<br/>";
echo $biblioteca->buscarUsuarioPorID(202) . "<br/>";
echo $biblioteca->buscarUsuarioPorID(303);