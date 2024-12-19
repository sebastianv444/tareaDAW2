<?php require_once 'includes/cabecera.php'; ?>
<?php $entrada_actual = conseguirEntrada($db, $_GET['id']); ?>

<!-- BARRA LATERAL -->
<?php require_once 'includes/lateral.php' ?>

<main id="principal">
    <h1><?php $entrada_actual['titulo']; ?></h1>

    <a href="categoria.php?id=<?= $entrada_actual['categoria_id']; ?>">
        <h2><?= $entrada_actual['categoria']; ?></h2>
    </a>

    <h4><?= $entrada_actual['fecha']?> | <?= $entrada_actual['usuario']?></h4>

    <p>
        <?= $entrada_actual['descripcion']; ?>
    </p>

    <!-- si el ususario está logado y es el autor de esta entrada mostraremos los botones
     de editar y borrar entrada -->
    <?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']):?>
    <a href="editar-entrada.php?id=<?= $entrada_actual['id']?>" class="boton boton-verde">Editar entrada</a>
    <a href="borrar-entrada.php?id=<?= $entrada_actual['id']?>" class="boton boton-azul">Borrar entrada</a>
    <?php endif;?>
</main>

<!-- PIE DE PÁGINA -->
<?php require_once 'includes/pie.php' ?>