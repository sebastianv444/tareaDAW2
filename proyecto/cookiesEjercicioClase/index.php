<?php

    $usuarios = [
        "pepe" => "123",
        "sebastian" => "7"
    ];

    $usuario= $_POST['users'];
    $contraseña = $_POST['pasword'];

    foreach($usuarios as $c => $v){
        if($usuario == $c && $contraseña == $v){
            setcookie('login',$usuario.'-'.$contraseña,time() + 3600);
            header('Location:bienvenida.php');
            exit();
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="POST">

        <label for="usuario">USUARIO:
            <input type="text" name="users" id="usuario">
        </label><br><br>

        <label for="contraseña">CONTRASEÑA:
            <input type="password" name="pasword" id="contraseña">
        </label><br><br>
        <input type="submit" value="enviar">

    </form>

</body>
</html>