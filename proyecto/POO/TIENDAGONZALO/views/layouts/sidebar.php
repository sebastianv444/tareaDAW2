<!-- BARRA LATERAL -->
<aside id="lateral">

<div id="login" class="block_aside">
    <h3>Entrar a la web</h3>
    <?php if(!isset($_SESSION['identidad'])): ?>
    <form action="?controller=Usuario&action=login" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" />
        <label for="password">Contraseña</label>
        <input type="password" name="password" />
        <input type="submit" value="Enviar" />
    </form>
    <?php else:?>
        <?= "<h4>Bienvenido!!</h2>
        <h4>{$_SESSION['identidad']->nombre} {$_SESSION['identidad']->apellidos}</h4>"; ?>
    <?php endif; ?>

    <?php if(isset($_SESSION['identidad'])):?>
    <ul>
        <li><a href="#">Mis pedidos</a></li>
        <li><a href="#">Gestionar pedidos</a></li>
        <li><a href="#">Gestionar categorias</a></li>
        <li><a href="?action=borrarSesion">Logout</a></li>
    </ul>
    <?php endif;?>
</div>

</aside>

<!-- CONTENIDO CENTRAL -->
<div id="central">