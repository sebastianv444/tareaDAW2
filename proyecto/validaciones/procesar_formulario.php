<?php

    $error = 'faltan_valores';

    if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && 
    !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['contraseña'])){

        $error = 'ok';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    //esto es el casting, esto te guarda directamente lo que venga del post como int.
    $edad = (int)$_POST['edad'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    if(!is_string($nombre) || preg_match("/[0-9]+/",$nombre)){
        $error = 'nombre';
    }
    //validar apellido.
    if(!is_string($apellido) || preg_match("/[0-9]+/",$nombre)){
        $error = 'apellido';
    }
    //validar edad.
    //con cualquiera de las 2 te valida tanto con la is_int y con el filter.
    if(!is_int($edad || !filter_var($edad, FILTER_VALIDATE_INT))){
        $error = 'edad';
    }
    // validar email.
    if(!is_string($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error = 'email';
    }
    //validar contraseña
    //el strlen es para indicar la longitud de una variable.
    if(!is_string($contraseña) || strlen($contraseña)< 5){
        $error = 'contraseña';
    }
    }

    if($error != 'ok'){
        header("Location:index.php?error=$error");
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php if($error === 'ok'): ?>

    <h2>Datos validados correctamente</h2>
    <p>Nombre: <?php $nombre ?></p>
    <p>APELLIDO: <?php $apellido ?></p>
    <p>EDAD: <?php $edad ?></p>
    <p>EMAIL: <?php $email ?></p>
    
    <?php endif; ?>

</body>
</html>