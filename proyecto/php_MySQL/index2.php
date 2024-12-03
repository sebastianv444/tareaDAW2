<?php

    /* 
        para conecta a la base de datos usaremos una libreria o extensión de PHP
        Se puede utilizar en formato de función o en formato POO (Programacion orientada
        a objetos).
    */

    /* el localhost puede se referenciada donde tinen alojada la base de datos, en nuestro
    caso lo tenemos alojado en nuestro sistema(localhost), pero en otras en las empresas 
    pueden tener alojadas en servidores de amazon, etc... */

    /* $conexion = mysqli_connect(host,usuario,contraseña,nombre_baseDeDatos,<puerto>); */
    $conexion = mysqli_connect("localhost","root","","phpmysql");

    //una muy buena practica es probar primero el ERROR antes que lo correcto INTENTALO!!
    if(mysqli_connect_error()){
        echo "La conexion a la BBDD ha fallado: ". mysqli_connect_error();
    }else{
        echo "!CONECTADOS CORRECTAMENTE A LA BASE DE DATOS!";
    };

    echo "</br>";

    //para hacer consultas a la dataBase.
    $query = mysqli_query($conexion,'SELECT * FROM notas');

    //var_dump me da los datos de la variable
    /* var_dump($query); */

    //recogemos los resultados en un array asociativo
    //para recoger los datos se hace con mysql_fetch_assoc, en el caso de que este correcto retorna un ARRAY ASOCIATIVO!.
    #https://www.php.net/manual/en/mysqli-result.fetch-assoc.php
    /* !IMPORTANTE!: tener en cuenta que una vez se ejecuta una vez el el fetch te guarda la primera fila en la variable,
    pero la segunda vez que la llames ya no te devolvera esta la primera linea, ya que ya se ejecuto una con fetch, por eso
    comente este fetch de abajo; */
    /* $notas = mysqli_fetch_assoc($query); */

    while($nota = mysqli_fetch_assoc($query)){
        echo "<br/>";
        echo "<h2>".$nota['titulo']."</h2>";
        echo $nota['descripcion']."<br/>";
    };

    //INSERTAR EN LA BASE DE DATOS

    $sql = "INSERT INTO notas VALUES
    (NULL,'nota tercera','otra tercera nota de pueba')";

    //este insert tendra un valor booleano indicando si se ha ingresado correctamente.
    $insert = mysqli_query($conexion,$sql);

    if($insert){
        echo "DATOS INSERTADOS CORRECTAMENTE";
    }else {
        echo "ERROR".mysqli_error($conexion);
    };

?>