<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALIDACIONES</title>
</head>
<body>

    <h2>formulario</h2>

    <?php 
    
        if(isset($_GET['error'])){
            $error = $_GET['error'];

            if($error === 'faltan_valores'){
                echo "<strong style='color: red';> Introduce todos los datos del formulario</strong>";
            }
            if($error === 'nombre'){
                echo "<strong style='color: red';> Introduce bien tu nombre</strong>";
            }
            if($error === 'apellido'){
                echo "<strong style='color: red';> Introduce bien tu apellido</strong>";
            }
            if($error === 'email'){
                echo "<strong style='color: red';> Introduce bien el email</strong>";
            }
            if($error === 'edad'){
                echo "<strong style='color: red';> Introduce bien tu edad</strong>";
            }
            if($error === 'contraseña'){
                echo "<strong style='color: red';> Introduce bien tu contraseña</strong>";
            }
        }

    ?>
    
    <form action="procesar_formulario.php" method="POST">

        <label for="nombre">NOMBRE:
            <input type="text" name="nombre" id="nombre">
        </label><br><br>

        <label for="apellido">APELLIDOS:
            <input type="text" name="apellido" id="apellido">
        </label><br><br>

        <label for="edad">EDAD:
            <input type="text" name="edad" id="edad">
        </label><br><br>

        <label for="email">EMAIL:
            <input type="email" name="email" id="email">
        </label><br><br>

        <label for="contraseña">CONTRASEÑA:
            <input type="password" name="contraseña" id="contraseña">
        </label><br>

        <input type="submit" value="enviar">

    </form>

</body>
</html>