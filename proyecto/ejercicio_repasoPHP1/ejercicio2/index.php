<?php

    if (isset($_COOKIE['visita'])) {
        $valor = $_COOKIE['visita'] + 1;
    } else {
        $valor = 1;
    }

    setcookie('visita', $valor, time() + 6000);
    echo "Has visitado esta página: " . $_COOKIE['visita'] . " veces";
?>