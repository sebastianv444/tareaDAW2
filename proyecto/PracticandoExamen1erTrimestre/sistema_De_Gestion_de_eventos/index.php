<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>EVENTOS</title>
</head>

<body>

    <header>
        <h1>EVENTOS</h1>
    </header>

    <main>
        <section>
            <!-- En caso ya existan eventos, te los muestra directamente -->
            <?php if (!isset($_SESSION['sesion'])): ?>
                <?php if (!isset($_SESSION['evento_creado'])): ?>
                    <div class="container">
                        <div class="card">
                        <p>hola1</p>
                            <p>hola2</p>
                            <p>hola3</p>
                            <p>hola4</p>
                            <p>hola5</p>
                        </div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div><p>hola2</p>
                            <p>hola3</p>
                            <p>hola4</p>
                            <p>hola5</p></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div><p>hola2</p>
                            <p>hola3</p>
                            <p>hola4</p>
                            <p>hola5</p></div>
                        <div></div>
                        <div><p>hola2</p>
                            <p>hola3</p>
                            <p>hola4</p>
                            <p>hola5</p></div>
                        <div></div>
                        <div><p>hola2</p>
                            <p>hola3</p>
                            <p>hola4</p>
                            <p>hola5</p></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div>
                            <p>hola1</p>
                            <p>hola2</p>
                            <p>hola3</p>
                            <p>hola4</p>
                            <p>hola5</p>
                        </div>
                        <div></div>
                        <div></div>
                        <div>
                        <p>hola1</p>
                            <p>hola2</p>
                            <p>hola3</p>
                            <p>hola4</p>
                            <p>hola5</p>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="iniciar_sesion">
                        <h3>No existen eventos actualmente</h3>
                        <a href="#">
                            <button type="button">Crear Evento</button>
                        </a>
                    </div>
                <?php endif; ?>
                <!-- de lo contrario tendras que iniciar sesion -->
            <?php else: ?>
                <div class="iniciar_sesion">
                    <h3>No existen eventos actualmente</h3>

                    <p>Inicia sesion para crear eventos</p>

                    <a href="login.php">
                        <button type="button">Iniciar Sesion</button>
                    </a>
                </div>
            <?php endif; ?>
        </section>
    </main>
</body>

</html>