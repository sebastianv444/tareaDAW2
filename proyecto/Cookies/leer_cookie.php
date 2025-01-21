<?php

    if(isset($_COOKIE['usuario'])){
        echo "La cookie es ".$_COOKIE."";
    }else{
        echo "la cookie no existe";
    }

?>