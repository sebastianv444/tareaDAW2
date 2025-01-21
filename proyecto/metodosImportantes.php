<?php
    //para que te borre los espacios en blanco inecesarios
    $texto = "  a  s sdsds asd";
    trim($texto);

    //para saber si lo que viene esta vacio
    $prueba = 0;
    empty($prueba);
    //sirve para decirle que si no esta vacio que se cumpla el if.
    if(!empty($prueba))

    //este metodo sirve para verificar si una variable esat definida y no es null.
    isset($texto);

    /*Recuerda que dentro del isset puedes separar las variables
    por comas o corchetes */
    if(isset([$texto][$prueba])){
        echo "si existen estas 2 variables.";
    }

    //otros metodos importantes
    echo "<h3>server".$_SERVER['SERVER_ADDR']."</br>";// direccion ip del servidor
    echo "<h3>server".$_SERVER['SERVER_NAME']." - SERVER_NAME - nombre servidor</br>";//nombre de servidor
    echo "<h3>server".$_SERVER['SERVER_SOFTWARE']."</br>";//software del servidor
    echo "<h3>server".$_SERVER['HTTP_USER_AGENT']."</br>";//indica el navegador
    echo "<h3>server".$_SERVER['REQUEST_METHOD']."</br>"; //para verificar que metodo estoy recibiendo
?>