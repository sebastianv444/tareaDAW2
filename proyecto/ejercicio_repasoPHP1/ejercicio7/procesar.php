<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nombre = isset($_POST['nombre']) && !empty($_POST['nombre']) ? (string)$_POST['nombre']: 'error';
        header("Location:index.php?nombre=$nombre");
    }

?>