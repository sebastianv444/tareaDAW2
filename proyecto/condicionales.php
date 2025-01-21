<?php

    $color = $_POST['color'];

    if($color == 'verde'){
        echo "tu color es el color: ".$color;
    }//en php el else if se escribe todo junto.
    elseif($color == 'rojo'){
        echo 'tu color es el color: '.$color;
    }else{
        echo 'tu color es: '.$color;
    }

    $opcion = 5;

    switch($opcion){
        case 1:
            echo "es lunes";
            break;
            case 2:
                echo "es martes";
                break;
                case 3:
                    echo "es miercoles";
                    break;
                    case 4:
                        echo "es jueves";
                        break;
                        case 5:
                            echo "es viernes";
                            break;
                            default:
                            echo "recuerda solo ingresar solo numeros del 1-5";
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="condicionales.php" method="POST">

    <input type="text" name="color" id="">

    </form>

</body>

</html>