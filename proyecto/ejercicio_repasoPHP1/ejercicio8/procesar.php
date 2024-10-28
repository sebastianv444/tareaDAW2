<?php

    session_start();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $voto = isset($_POST['voto']) ? (string)$_POST['voto']:null;

        if($voto !== null){
            if(!isset($_SESSION['votos'])){
                $_SESSION['votos'] = [];
            }
            array_push($_SESSION['votos'],$voto);
            
            $rutaActual = getcwd()."\decision";
            $archivo = $rutaActual.'\voto.txt';

            if(!is_dir($rutaActual) && !file_exists($archivo)){
                mkdir($rutaActual);

                /* RECORDATORIO: si no le especifico ninguna ruta en la variable, 
                el fopen me crea por defecto en el directorio actual donde me 
                encuentre, en el caso que le especifique la ruta me crea el 
                archivo en la ruta especificada. */
                $puntero = fopen($archivo,'w');
                /* RECORDATORIO: se le pasa $puntero y no $archivo, ya que $puntero 
                es un puntero con el archivo ya abierto para modificarlo. */
                fwrite($puntero, "VOTOS REGISTRADOS:\n -$voto");
                fclose($puntero);
            }else{
                $puntero = fopen($archivo,'a');
                fwrite($puntero, "\n-$voto");
                fclose($puntero);
            }
            header('Location:resultados.php');
            exit();
        }else{
            header("Location:index.php?voto=$voto");
            exit();
        }
    }

?>