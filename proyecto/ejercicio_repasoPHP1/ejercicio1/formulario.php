<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="ProcesarFormulario.php" method="POST">

        <label for="num1">num1:
            <input type="number" name="num1" id="</label>"><br>
        </label>

        <label for="num2">num2
            <input type="number" name="num2" id="num2">
        </label><br>
        <input type="submit" value="sumar">

        <div>
            <?php
                echo "<h3 style='color: green';>LA SUMA ES: ".$_GET['resultado']."</h3>";
            ?>
        </div>

    </form>

</body>
</html>