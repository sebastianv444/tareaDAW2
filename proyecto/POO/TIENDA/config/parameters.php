<?php

    /* Esto sirve para hacer las rutas amigables y que no se vean muchos parametros por
    la url */

    /* Las constantes definidas con define() se crean en tiempo de ejecución mientras que las 
    constantes definidas con const se crean en tiempo de compilación. */
    /* CREAMOS UNA URL CONSTANTE. Tambien podiamos hacer un const base_url = "lo que sea" */
    define("base_url", "localhost/proyecto/POO/TIENDA/");
    define("controller_default","ProductoController");
    define("action_default","index");

    // activar el rewrite_module en apache para poder hacer kas rutas amigables.

    /* crear en la raiz el fichero .htaccess , este archivo es un archivo de configuracion de 
    apache */