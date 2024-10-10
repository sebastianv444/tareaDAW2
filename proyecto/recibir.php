<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Recibir los datos</h1>
    <?php

    $nombre = $_POST['name'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];

    echo $_GET['name'];
    echo $_GET['apellido'];
    echo $_GET['edad'];

    ?>
</body>
</html>