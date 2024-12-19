<?php require_once 'includes/cabecera.php'; ?>

<!-- BARRA LATERAL -->
<?php require_once 'includes/lateral.php' ?>

<main id="principal">
    <h1>Todas las entradas</h1>

    <?php
    $entradas = conseguirEntradas($db);

    if (!empty($entradas)):
        while ($entrada = mysqli_fetch_assoc($entradas)): ?>

            <!-- estos articulos deberían estar en un section, en esta ocasion se olvido, 
         no tocar el codigo pls -->
            <article class="entrada">
                <a  href="entrada.php?id=<?= $entrada['id'];?> >
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

</main>

<!-- PIE DE PÁGINA -->
<?php require_once 'includes/pie.php' ?>