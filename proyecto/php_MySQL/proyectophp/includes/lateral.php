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
                <?php
                if(isset($_SESSION['completado'])):?>
                <div class="alerta"><?= $_SESSION['completado'];?></div>
                <?php endif;?>
                <form action="registro.php" method="POST">
                    <label for="nombre">nombre:</label>
                    <input type="text" name="nombre" id="nombre">
                    <?= isset($_SESSION['errores']) ? mostrarError($_SESSION['completado']) ?>

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
