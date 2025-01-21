<?php

    require_once "Producto.php";

    $nombre = new Producto("ASUS",1200,2);

    echo $nombre->mostrarInformacion();
