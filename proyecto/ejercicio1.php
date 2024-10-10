<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="verificar.php" method="POST">
        <h1>Ingrese sus Datos</h1>
        <label for="nombre">nombre:</label>
        <input type="text" name="nombre" id="nombre" ><br><br>

        <label for="edad">edad:</label>
        <input type="number" name="edad" id="edad" ><br><br>

        <label for="email">correo:</label>
        <input type="email" name="email" id="email"><br><br>
        <input type="submit" value="enviar">
    </form>

</body>
</html>