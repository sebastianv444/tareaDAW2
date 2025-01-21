<?php 
    //LA DIFERENCIA ENTRE COOKIE Y SESIONES ES QUE LAS COOKIES SOLO ALMACENAN TEXTO Y ND MAS.
    $nombre_cookie = "usuario";
    $dato = "sebastian";

    setcookie($nombre_cookie,$dato,time()+2000);
    echo "se a establecido las cookies";

?>
<br>
<a href="leer_cookie.phps">Leer cookies</a>