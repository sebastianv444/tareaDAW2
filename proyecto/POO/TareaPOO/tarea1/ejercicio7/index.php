<?php

require_once './clases.php';

$usuario = new Usuario();
$usuario->realizarAccion("Inicio sesión");
$usuario->realizarAccion("Subió un archivo");

$admin = new Administrador();
$admin->gestionarSistema("Eliminó un usuario");

print_r($usuario->mostrarLog());

print_r($admin->mostrarLog());
