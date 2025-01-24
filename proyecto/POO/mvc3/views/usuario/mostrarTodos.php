<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- estamos accediendo a la variable de todos los usuarios del controlador. -->
     <!-- el  -->
    <?php while($usuario = $todos_los_usuarios->fetch_object()):?>
        <?= $usuario->nombre ?> - <?= $usuario->fecha?><br/>
    <?php endwhile;?>
</body>
</html>