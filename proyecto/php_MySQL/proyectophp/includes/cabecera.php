<?php require_once 'conexion.php'?>
<?php require_once 'helpers.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Videojuegos</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<!-- RECOMENDACION: siempre solo se usa un h1 por pagina, ya que se usa para 
     lo mas importante que referencie tu página.Tambien, google procesa lo que 
     referencia tu pagina, por eso ira directamente a tu h1, y si tienes varios h1 habra conflictos -->

<body>
    <!--     CABECERA     -->
    <header id="cabecera">
        <div id="logo">
            <a href="index.php">Blog de Videojuegos</a>
        </div>
        <!--       MENU       -->

        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                    <?php 
                    $categorias = conseguirCategorias($db);
                    if(!empty($categorias)):
                        while($categoria = mysqli_fetch_assoc($categorias)):
                    ?>
                    <li>
                        <a href="categoria.php?id=<?= $categoria['id'];?>"><?= $categoria['nombre']?></a>
                    </li>
                    <?php
                        endwhile;
                    endif;
                    ?>
                <li>
                    <a href="index.php">about me</a>
                </li>
                
                <li>
                    <a href="index.php">Contactos</a>
                </li>
            </ul>
        </nav>

        <div class="clearfix"></div>

    </header>

    <div id="contenedor">