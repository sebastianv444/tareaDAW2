<?php

require_once "productoRopa.php";
require_once "productoElectronico.php";

$producto1 = new ProductoElectronico("Televisor", 500);
$producto2 = new ProductoRopa("Camisa", 50);

echo $producto1->mostrarInformacion() . "<br/><br/>";
echo $producto2->mostrarInformacion() . "<br/>";