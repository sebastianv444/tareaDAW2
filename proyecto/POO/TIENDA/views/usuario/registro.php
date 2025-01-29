<h1>Registrarse</h1>

<?php
//comprobamos si existe registro.
if(isset($_SESSION['registro']) && $_SESSION['registro'] == 'completado'):?>
<strong class="alert_green">Registro completado correctamente</strong>
<?php elseif(isset($_SESSION['registro']) && $_SESSION['registro'] == 'fallo'):?>
<strong class="alert_red">Registro fallido, introduce bien los datos</strong>
<?php endif; ?>

<?php Utils::borrarSesion('registro');?>

<form action="index.php?controller=Usuario&action=salvar" method="POST">

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre">

    <label for="apellidos">Apellido:</label>
    <input type="text" name="apellidos">

    <label for="email">email:</label>
    <input type="text" name="email">

    <label for="password">Password:</label>
    <input type="text" name="password">

    <input type="submit" value="Registrarse">
</form>