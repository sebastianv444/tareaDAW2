<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>


<main id="principal">
<h1>Mi datos</h1>

<?php if(isset($_SESSION['completado'])) :?>
        <div class="alerta" > <?=$_SESSION['completado']; ?>
        </div>

<?php elseif(isset($_SESSION['errores']['general'])) :?>
        <div class="alerta alerta-error" > <?=$_SESSION['errores']['general']; ?> </div>
<?php endif; ?>

<form action="actualizar-usuario.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="<?= $_SESSION['usuario']['nombre'] ?>">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : '';?>

            <label for="apellidos">apellidos</label>
            <input type="text" name="apellidos" id="apellidos" value="<?= $_SESSION['usuario']['apellidos']?>">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : '';?>
            
            <label for="email">email</label>
            <input type="email" name="email" id="email" value="<?= $_SESSION['usuario']['email'] ?>">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : '';?>

            <input type="submit" value="Actualizar">
        </form>
        <?php borrarErrores(); ?>

</main> 

<!-- PIE DE PÁGINA -->
<?php require_once 'includes/pie.php'; ?>