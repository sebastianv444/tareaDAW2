<?php 

    $directorio = 'mis_archivos';

    //creamos tres archivos
    for($i = 1;$i<=3;$i++){

        $path = $directorio."/archivo.$i.txt";

        //abrimos el archivo en modo escritura
        $archivo = fopen($path,'w');

        //escribimos contenido
        fwrite($archivo,"contenido del archivo numero $i \n");

        fclose($archivo);
        echo "archivo creado: archivo_$i.txt </br>";

    }

?>