<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="procesar.php" method="GET">

        <label for="num">INGRESE UN NUMERO: 
            <input type="number" name="num" id="num">
        </label><br><br>
        
        <input type="submit" value="ENVIAR">

    </form>

    <?php if(isset($_GET['array']) && isset($_GET['numero'])):?>
            <h3>TABLA DEL <?php echo htmlspecialchars($_GET['numero']) ?>:</h3>
            <?php foreach($_GET['array'] as $fila):?>
                <h3><?php echo "{$_GET['numero']} x {$fila['multiplicador']} = {$fila['resultado']}" ; ?>
                </h3>
            <?php endforeach;?>
            <!-- RECORDATORIO: el primer isset es necesario, ya que si directamente solo le 
             digo la condicion de < 0 estaria comprobando con un GET[] que todavia no existe,
             puesto que el input del numero todavia no se envia a la pagina de procesar, por
             eso es necesario el primer isset.-->
        <?php elseif(isset($_GET['numero']) && $_GET['numero'] < 0):?>
            <div>
                <h3>el numero <?php echo $_GET['numero']?> no es valido.</h3>
            </div>
        <?php endif;?>

</body>
</html>