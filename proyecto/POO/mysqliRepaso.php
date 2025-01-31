<?php

// Conexion a la base de datos
// Retorna un objeto de la clase mysqli si la conexión es exitosa.
/*  Si la conexión falla, no retorna nada, pero puedes acceder al error usando 
$mysqli->connect_error. */
$mysqli = new mysqli("localhost", "root", "", "tienda_master");

//Ejecuta una consulta SQL en la base de datos.
/* Para consultas SELECT, SHOW, DESCRIBE, EXPLAIN, retorna un OBJETO mysqli_result 
que contiene los resultados. */
/* Para consultas INSERT, UPDATE, DELETE, retorna true si la consulta fue exitosa.
Si la consulta falla, retorna false. */
$mysqli->query("SET NAMES 'utf8'");

// Proporciona el mensaje de error si la conexión a la base de datos falla.
// Retorna una cadena de texto con el mensaje de error si la conexión falla.
// Retorna null si la conexión es exitosa.
$mysqli->connect_error;

//Proporciona el mensaje de error de la última operación realizada.
//Retorna una cadena de texto con el mensaje de error si la última operación falló.
//Retorna una cadena vacía ("") si no hay errores.
$mysqli->error;

// Retorna un array asociativo con los datos de la fila.
// Retorna null si no hay más filas.
/* OJO: puedes recorrer esto con un while, y el while parara cuando ya no encuentre mas
filas en tu consulta. */
$resultado = $mysqli->query("SELECT * FROM categorias");
$resultado->fetch_assoc();

// Devuelve el número de filas afectadas por la última consulta (INSERT, UPDATE, DELETE).
// Retorna un entero con el número de filas afectadas.
// Retorna -1 si la última consulta no fue un INSERT, UPDATE, DELETE.
$mysqli->affected_rows;