<?php

    require_once "clases.php";

    $persona = new Persona();
    $persona->setNombre("gonzalo");
    /* var_dump($persona); */

    $informatico = new informatico();

    var_dump($informatico);
    echo "<br/>".$informatico->sabeLenguajes("java,php,python");

    echo "<br/>";

    $tecnicoRedes = new TecnicoRedes();
    var_dump($tecnicoRedes);