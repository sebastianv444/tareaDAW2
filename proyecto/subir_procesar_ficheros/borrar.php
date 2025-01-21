<?php
    //para ver si esta llegando  a travez de el metodo post.

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //esto viene de subida_ficheros.php que creamos con echo.
        if(isset($_POST['archivo'])){
            $archivo = $_POST['archivo'];
            $ruta_archivo = 'imagenes/'.$archivo;

            //verificamos si existe ante de intentar borrarlo
            if(file_exists($ruta_archivo)){
                //intentamos borrar el archivo.
                if(unlink($ruta_archivo)){
                    echo "<h2>El archivo ha sido borrado correctamente</h2>";
                }else{
                    echo "<h2>El archivo ha sido borrado correctamente";
                }
            }else{
                echo "<h2>ERROR el archivo no existe</h2>";
            }
        }
    }

    header("Location:subida_ficheros.php");

?>