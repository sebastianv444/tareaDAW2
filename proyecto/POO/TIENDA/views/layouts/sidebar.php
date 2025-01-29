<!-- BARRA LATERAL -->
<aside id="lateral">

<div id="login" class="block_aside">
    <?php if(!isset($_SESSION['identidad'])):?>
    <h3>Entrar a la web</h3>
    <form action="?controller=Usuario&action=login" method="post">
        <?php if(!isset($_SESSION['identidad'])):?>
        <label for="email">Email</label>
        <input type="email" name="email" />
        <label for="password">Contraseña</label>
        <input type="password" name="password" />
        <input type="submit" value="Enviar" />
        <?php endif;?>
    </form>
    <?php else:?>
        <h3><?= $_SESSION['identidad']->nombre ?> <?= $_SESSION['identidad']->apellidos?></h3>
    <?php endif;?>
    <ul>
        <?php if(isset($_SESSION['admin'])):?>        
        <li><a href="?controller=Categoria&action=index">Gestionar pedidos</a></li>
        <li><a href="#">Gestionar categorias</a></li>
        <?php endif;?>

        <?php if(isset($_SESSION['identidad'])):?>
        <li><a href="#">Mis pedidos</a></li>
        <li><a href="?controller=Usuario&action=logout">Logout</a></li>
    </ul>
    <?php endif;?>
    
</div>

</aside>

<!-- CONTENIDO CENTRAL -->
<div id="central">