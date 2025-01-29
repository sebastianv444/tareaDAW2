<?php require_once 'includes/cabecera.php'; ?>


<!-- BARRA LATERAL  -->
<?php require_once 'includes/lateral.php'; ?>

<main id="principal">
<h1>Últimas entradas</h1>

<?php 
    $entradas = conseguirEntradas($db, true);

    if(!empty($entradas)):        
        while ($entrada = mysqli_fetch_assoc($entradas)):?>
        <article>
                <a href="entrada.php?id=<?= $entrada['id'] ?>">
                    <h2> <?= $entrada['titulo'];  ?> </h2>
                    <span class="fecha"> <?= $entrada['categoria'].' | '. $entrada['fecha']; ?> </span>
                    <p>
                    <?= substr($entrada['descripcion'], 0,180). "..."; ?>
                    </p>
                </a>       
            </article>
    <?php
        endwhile;
    endif;
    ?>

<!-- estos artículos deberían estar en un section -->
    

    <div id="ver-todas"><a href="entradas.php"> Todas las entradas</a></div>
</main> 

<!-- PIE DE PÁGINA -->

<?php require_once 'includes/pie.php'; ?>

