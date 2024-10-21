<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- El enctype y su valor sirve para permitir la subida de archivos -->
    <form action="upload.php" method="POST" enctype="multipart/form-data">

        <input type="file" name="archivo" id=""><br><br>
        <input type="submit" value="Enviar">

        <h2>Listado de imágenes subidas</h2>

        <?php
            $directorio = 'imagenes';

            //escaneamos el directorio
            /* scandir() devuelve un array con los ficheros y los directorios que se encuentran
             bajo directory . */
            $archivos = scandir($directorio);

            //mostrar los archivos de directorio
            echo "Archivos en el directorio $directorio</br>";

            foreach($archivos as $arch):
                //ignoramos los archivos "." y ".."
                if($arch !='.' && $arch != '..'){
                    echo "<div style='margin: bottom 10px'>";
                        echo "<img src='imagenes/$arch' width='200px'></br>";
                        echo "<form action='borrar.php' method='POST'>";
                            echo "<input type='hidden' name='archivo' value='$arch'>";
                            echo "<input type='submit' value='eliminar' />";
                        echo "</form>";
                    echo "</div>";
                }
            endforeach;

        ?>

    </form>

</body>
</html>