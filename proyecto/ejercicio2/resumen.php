<?php
    $manzana=$_POST["eleccion1"];
    $platano=$_POST["eleccion2"];
    $peras=$_POST["eleccion3"];

    if($manzana == 'on') echo 'Manzana';
    if($platano == 'on') echo 'platano';
    if($peras == 'on') {echo 'peras';
    }else{
        echo "";
    }
    
?>
