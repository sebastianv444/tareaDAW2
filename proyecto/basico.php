<?php

    $nombre= $_POST["nombre"];
    echo "tu nombre es: $nombre";
    echo '</br>';
    echo "tipo de variable de tu nombre:" . gettype($nombre);
    echo '</br>';
    //constantes, las constantes no se llaman con el simbolo dolar
    define('constante', 'holaas');
    echo constante;
    //metodo server
    echo "<h3>server".$_SERVER['SERVER_ADDR']."</br>";// direccion ip del servidor
    echo "<h3>server".$_SERVER['SERVER_NAME']." - SERVER_NAME - nombre servidor</br>";//nombre de servidor
    echo "<h3>server".$_SERVER['SERVER_SOFTWARE']."</br>";//software del servidor
    echo "<h3>server".$_SERVER['HTTP_USER_AGENT']."</br>";//indica el navegador
    echo "<h3>server".$_SERVER['REQUEST_METHOD']."</br>"; //para verificar que metodo estoy recibiendo

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" action="index.php">

        <input type="text" name="nombre" id="">
        
    </form>

</body>
</html>