<?php 

require_once "includes/conexion.php"; 

if(isset($_SESSION['usuario']) && isset($_GET['id'])) {
    $entrada_id = $_GET['id'];
    $usuario_id = $_SESSION['usuario']['id'];

    $sql = "DELETE FROM entradas WHERE usuario_id = $usuario_id AND id = $entrada_id";

    $borrar = mysqli_query($db,$sql);
    // esta sentencia se puede usar por si nos falla y 
    // queremos comprobar el error en el sql:
    // echo mysqli_error($db);
    // die();   // die() es para parar la ejecución 
}

header('Location: index.php');

?>