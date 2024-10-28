<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['text'])){
            $text = (string)$_POST['text'];
            trim($text);
            $mayusculas = strtoupper($text);
            $minusculas = strtolower($text);

            header("Location:index.php?mayusculas=$mayusculas&minusculas=$minusculas");
        };
    };

?>