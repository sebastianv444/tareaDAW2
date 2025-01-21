<?php 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['num1']) && isset($_POST['num2']) &&
         is_numeric($_POST['num1']) && is_numeric($_POST['num1'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $resultado = $num1 + $num2;
            header("Location:formulario.php?resultado=$resultado");
        }
    }

?>