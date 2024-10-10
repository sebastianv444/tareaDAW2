<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="recibir.php" method="get">

        <label for="name">INGRESE SU NOMBRE:</label>
        <input type="text" name="name" id="name"><br>

        <label for="apellido">INGRESE SU APELLIDO:</label>
        <input type="text" name="apellido" id="apellido"><br>
    
        <label for="edad">INGRESE SU EDAD:</label>
        <input type="text" name="edad" id="edad"><br>

        <a href="recibir.php"><input type="submit" value="enviar formulario"></a>
    </form>

</body>
</html>