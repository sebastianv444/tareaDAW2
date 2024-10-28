<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            height: 100vh;
            width: 100%;
        }
        form{
            display: flex;
            flex-flow: column wrap;
            justify-content: center;
            align-items: center;
            height: 100%;
            font-size: 19px;
        }
        div{
            display: inline-block;
            border: 1px solid black;
            text-align: center;
            padding: 77px 100px;
        }
        label{
            font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }
        h3{
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
    </style>
</head>
<body>
    
    <form action="procesar.php" method="POST">

        <div>
            <label for="nombre">NOMBRE:</label>
            <input type="text" name="nombre" id="nombre"><br><br>
            <input type="submit" value="ENVIAR">
            <?php if(isset($_GET['nombre']) && $_GET['nombre'] !== 'error'):?>
                <h3 style="color: green;">tu nombre '<?= $_GET['nombre']?>' es correcto</h3>
            <?php elseif(isset($_GET['nombre']) && $_GET['nombre'] == 'error'):?>
                <h3 style="color: red;">El campo esta vacio</h3>
            <?php endif;?>
        </div>

    </form>

</body>
</html>