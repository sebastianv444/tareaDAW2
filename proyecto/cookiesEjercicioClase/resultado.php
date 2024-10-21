<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h3>
    <?php
        echo "NOMBRE: ".$_COOKIE['nombre']."<br>";
        echo "APELLIDO: ".$_COOKIE['apellido']."<br>";
        echo "EDAD: ".$_COOKIE['edad'];
    ?>
    </h3>

</body>
</html>