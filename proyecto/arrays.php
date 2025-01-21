<?php

    //primera forma
    $frutas = array("manzana","platanos","peras");
    //segunda forma(recomendada)
    $nombres = ["juan","jose","martin"];

    foreach($nombres as $dato){
        echo "<li>".$dato."</li>";
    }

    //el count te da el valor total de los espacios del array
    count($nombres); //nos da un total de 2, ya que tenemos 3 espacios ocupados enel array

    //Arrays bidimensionales
    $bidimensional = [
        ["juan",23,"madrid"],
        ["jose",33,"sevilla"],
        ["martin",20,"malaga"]
    ];

    foreach($bidimensional as $fila){
        foreach($fila as $columna){
            echo $columna;
        }
        echo "</br>";
    }

?>