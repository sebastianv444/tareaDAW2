<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Videojuegos</title>
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
                    <a href="">Inicio</a>
                </li>
                <li>
                    <a href="">Categoria1</a>
                </li>
                <li>
                    <a href="">Categoria2</a>
                </li>
                <li>
                    <a href="">Categoria3</a>
                </li>
                <li>
                    <a href="">Categoria4</a>
                </li>
                <li>
                    <a href="">about me</a>
                </li>
                <li>
                    <a href="">Contactos</a>
                </li>
            </ul>
        </nav>

        <div class="clearfix"></div>

    </header>

    <div id="contenedor">
        <!-- BARRA LATERAL -->

        <aside id="sidebar">
            <h3>Identifícate</h3>
            <div id="login" class="bloque">
                <form action="login.php" method="POST">
                    <label for="email">email:</label>
                    <input type="email" name="email" id="email">

                    <label for="password">password:</label>
                    <input type="password" name="password" id="password">

                    <input type="submit" value="ENTRAR">
                </form>
            </div>

            <div id="register" class="bloque">
                <h3>Registrarse</h3>
                <form action="registro.php" method="POST">
                    <label for="nombre">nombre:</label>
                    <input type="text" name="nombre" id="nombre">

                    <label for="apellidos">apellidos:</label>
                    <input type="text" name="apellidos" id="apellidos">

                    <label for="email">email:</label>
                    <input type="email" name="email" id="email">

                    <label for="password">password:</label>
                    <input type="password" name="password" id="password">

                    <input type="submit" value="REGISTRARSE">
                </form>
            </div>
        </aside>

        <main id="principal">
            <h1>Últimas entradas</h1>

            <!-- estos articulos deberían estar en un section, en esta ocasion se olvido, 
         no tocar el codigo pls -->
            <article>
                <a>
                    <h2>Título de la entrada</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, et.</p>
                </a>
            </article>

            <article>
                <a>
                    <h2>Título de la entrada</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, et.</p>
                </a>
            </article>

            <article>
                <a>
                    <h2>Título de la entrada</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, et.</p>
                </a>
            </article>

            <article>
                <a>
                    <h2>Título de la entrada</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, et.</p>
                </a>
            </article>

            <div id="ver-todas"><a href="">todas las entradas</a></div>
        </main>
        
        <div class="clearfix"></div>
    </div><!-- Fin contenedor -->

</body>

</html>