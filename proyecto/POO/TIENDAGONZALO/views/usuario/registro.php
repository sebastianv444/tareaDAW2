<h1>Registrarse</h1>

<?php if(isset($_SESSION['registro']) && $_SESSION['registro'] == 'completado'): ?>
<strong class="alert_green" >Registro completado correctamente</strong>
<?php elseif(isset($_SESSION['registro']) && $_SESSION['registro'] == 'fallo'): ?>
    <strong class="alert_red" >Registro fallido, introduce bien los datos</strong>
<?php endif; ?>

<?php Utils::borrarSesion('registro'); ?>

<form action= "index.php?controller=Usuario&action=salvar" method="POST">
<label for="nombre">Nombre</label>
<input type="text" name="nombre">
<label for="apellidos">apellidos</label>
<input type="text" name="apellidos">
<label for="email">email</label>
<input type="email" name="email">
<label for="password">Password</label>
<input type="password" name="password">

<input type="submit" value="Registrarse" />

</form>