<?php
$index = true;
$indexNav = $registerNav??'nav--div';
$estilo = 'index.css';
$titulo = 'INICIO';
include 'header.php';
?>

<main>
    <section>
        <h1><?= $h1Form??'Bienvenido'?></h1>
        <?php if(!isset($registro)):?>
        <p class="txtEspecial">Por favor, inicia sesion o registrate</p>
        <?php endif;?>
        <form action="<?= $rutaForm ?? 'login.php'?>" method="POST">
            <input type="text" name="usuario" id="usuario" placeholder="USUARIO"><br><br>

            <input type="password" name="contraseña" id="contraseña" placeholder="CONTRASEÑA"><br><br>

            <button type="submit"><?= $boton??'LOGIN'?></button>

            <?php if(!isset($registro)):?>
                <p>¿aun no tienes cuenta?</p>
                <a href="register.php" class="reg">registrate</a>
            <?php endif;?>
            <?php if(isset($_GET['error'])):?>
                <p style="color: red; ">Ingrese bien sus datos</p>
            <?php elseif(isset($_GET['noExiste'])):?>
                <p style="color: red; ">Usuario no existente</p>
            <?php endif;?>
        </form>
    </section>
</main>

<?php include 'footer.php' ?>