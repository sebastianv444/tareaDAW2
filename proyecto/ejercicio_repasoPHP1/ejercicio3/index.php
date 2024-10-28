<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="procesar.php" method="POST"><br>
        
        <label for="text">INGRESE SU TEXTO:
            <input type="text" name="text" id="text"><br><br>
            <input type="submit" value="enviar" style="padding: 10px;">
            <div>
                <?php if(isset($_GET['mayusculas']) && isset($_GET['minusculas'])): ?>
                    <h3>Texto en mayusculas: <?php echo $_GET['mayusculas'];?></h3>
                    <h3>Texto en minusculas: <?php echo $_GET['minusculas'];?></h3>
                <?php endif;?>
            </div>
        </label>

    </form>

</body>
</html>