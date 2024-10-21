<?php

    if(isset($_COOKIE['visita'])){
        $_COOKIE['visita']++;
    }else{
        $valor = 1;
    }

    setcookie('visita',$valor,time() + 6000);
    echo "has visitado esta pagina:". $_COOKIE['visita']." veces";
?>