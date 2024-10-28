<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>VOTOS REGISTRADO:</h1>
    <?php if(isset($_SESSION['votos'])):?>
        <?php foreach($_SESSION['votos'] as $iterador):?>
            <li><?= $iterador?></li>
        <?php endforeach;?>
        <hr>
        <h3>VOTOS TOTOALES:</h3>
        <?php 
        /** RECORDATORIO: se le asgina a $total un array asociativo mediante el 
         * metodo array_count_values, Este metodo cuenta todos los valores que hay 
         * y los que se repiten los asigna como clave y le da un valor segun 
         * las veces que se repita.
         */
        $total = array_count_values($_SESSION['votos']);
        foreach($total as $c => $v):?>
        <p><?= $c?> : <?= $v?> votos</p>
        <?php endforeach;?>
    <?php endif;?>
    <a href="index.php">votar nuevamente</a>
</body>
</html>