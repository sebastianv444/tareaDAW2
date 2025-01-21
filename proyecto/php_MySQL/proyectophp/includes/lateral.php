<?php require_once 'helpers.php'; ?>


<aside id="sidebar">

<?php if(isset($_SESSION['usuario'])) : ?>

<h3>Bienvenido/a, <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos'] ?> </h3>

<!-- BOTONES -->
<a href="crear-entradas.php" class="boton boton-verde">Crear entradas</a>
<a href="crear-categorias.php" class="boton">Crear categoría</a>
<a href="mis-datos.php" class="boton boton-naranja">Mis datos</a>
<a href="cerrar.php" class="boton boton-rojo">Cerrar sesión</a>

<?php endif; ?>


<?php if(!isset($_SESSION['usuario'])) : ?> <!-- comprobar si el usuario está logado, si lo está, quitamos los bloques -->
    <div id="login" class="bloque">
        <h3>Identíficate</h3>

        <?php if(isset($_SESSION['error_login'])) : ?>

            <div class="alerta alerta-error">
                <?= $_SESSION['error_login']; ?>
            </div>

        <?php endif; ?>
        

        <form action="login.php" method="POST">
            <label for="email">email</label>
            <input type="email" name="email" id="email">

            <label for="password">Password</label>
            <input type="password" name="password" id="password">

            <input type="submit" value="Entrar">
        </form>
    </div>

    <div id="register" class="bloque">
        <h3>Registrarse</h3>
        <?php  
        if(isset($_SESSION['completado'])) :?>
        <div class="alerta" > <?=$_SESSION['completado']; ?> </div>
        <?php endif; ?>

        <form action="registro.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : '';?>

            <label for="apellidos">apellidos</label>
            <input type="text" name="apellidos" id="apellidos">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : '';?>
            
            <label for="email">email</label>
            <input type="email" name="email" id="email">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : '';?>

            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : '';?>

            <input type="submit" value="Registrarse">
        </form>
        <?php borrarErrores(); ?>
    </div>

   <?php endif; ?> <!-- Fin bloque comprobar si el usuario está registrado para quitar los bloques -->
</aside>