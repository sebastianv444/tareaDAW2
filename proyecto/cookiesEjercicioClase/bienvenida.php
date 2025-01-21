<?php

    if(!isset($_COOKIE['login'])){
        header('Location:index.php');
    }
    echo "<h3>bienvenido ". $_COOKIE['login']."</h3>";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="bienvenida.php" method="POST">

        <label for="nombre">NOMBRE:
            <input type="text" name="nombre" id="nombre" required>
        </label><br><br>

        <label for="apellido">APELLIDOS:
            <input type="text" name="apellido" id="apellido" required>
        </label><br><br>

        <label for="edad">EDAD:
            <input type="text" name="edad" id="edad" required>
        </label><br>

        <input type="submit" value="SUBIR">
    </form>

    <?php
        trim($_POST['nombre']);
        trim($_POST['apellido']);
        trim($_POST['edad']);
        if(isset($_POST['nombre'],$_POST['apellido'],$_POST['edad'])){
            setcookie('nombre',$_POST['nombre'],time()+3600);
            setcookie('apellido',$_POST['apellido'],time()+3600);
            setcookie('edad',$_POST['edad'],time()+3600);
            header('Location:resultado.php');
        }
    ?>
</body>
</html>