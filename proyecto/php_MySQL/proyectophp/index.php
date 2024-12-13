<?php require_once 'includes/cabecera.php'; ?>

<!-- BARRA LATERAL -->
<?php require_once 'includes/lateral.php' ?>

<main id="principal">
    <h1>Últimas entradas</h1>

    <?php
    $entradas = conseguirUltimasEntradas($db);
    if (!empty($entradas)):
        while ($entrada = mysqli_fetch_assoc($entradas)): ?>

            <!-- estos articulos deberían estar en un section, en esta ocasion se olvido, 
         no tocar el codigo pls -->
            <article class="entrada">
                <a href="#">
                    <h2><?= $entrada['titulo']; ?></h2>
                    <span class="fecha"><?= $entrada['categoria'] . ' | ' . $entrada['fecha'] ?></span>
                    <p>
                        <!-- esto te coje los 100 primeros caracteres de descripcion de base de datos -->
                        <?= substr($entrada['descripcion'],0,100).'...';?>
                    </p>
                </a>
            </article>

    <?php endwhile;
    endif; ?>

    <div id="ver-todas"><a href="">todas las entradas</a></div>
</main>

<!-- PIE DE PÁGINA -->
<?php require_once 'includes/pie.php' ?>