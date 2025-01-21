<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="procesar.php" method="POST">

        <h2>ENCUESTA</h2>

        <div>
            <p style="font-size: 17px;">COLOR FAVORITO:</p>
            <input type="radio" name="voto" value="azul" id="voto1">
            <label for="voto1">Azul</label><br>
            <input type="radio" name="voto" value="amarillo" id="voto2">
            <label for="voto2">Amarillo</label><br>
            <input type="radio" name="voto" value="rojo" id="voto3">
            <label for="voto3">Rojo</label><br>
            <input type="radio" name="voto" value="celeste" id="voto4">
            <label for="voto4">Celeste</label><br>
            <input type="radio" name="voto" value="negro" id="voto5">
            <label for="voto5">Negro</label><br><br>

            <input type="submit" value="VOTAR">
            <?php if(isset($_GET['voto'])):?>
                <h3 style="color: red;"><?= 'has enviado un voto en blanco, no es valido.'?></h3>
            <?php endif;?>
        </div>

    </form>

</body>

</html>