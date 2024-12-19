<?php require_once 'includes/cabecera.php'; ?>

<?php 
if(isset($_GET['id'])) {
    $categoria_actual = conseguirCategoria($db, $_GET['id']);
    if(!isset($categoria_actual['id'])) {
       
    }
}else {
    header('Location: index.php');
}
?>

<!-- BARRA LATERAL  -->
<?php require_once 'includes/lateral.php'; ?>

<main id="principal">
<h1>Entradas de <?= $categoria_actual['nombre']; ?> </h1>

<?php 
    
    $entradas = conseguirEntradas($db, null, $_GET['id']);

    if(!empty($entradas)):        
        while ($entrada = mysqli_fetch_assoc($entradas)):?>
        <article>
                <a href="entrada.php?id=<?= $entrada['id']; ?>">
                    <h2> <?= $entrada['titulo'];  ?> </h2>
                    <span class="fecha"> <?= $entrada['categoria'].' | '. $entrada['fecha']; ?> </span>
                    <p>
                    <?= substr($entrada['descripcion'], 0,180). "..."; ?>
                    </p>
                </a>       
            </article>
    <?php
        endwhile;
    else:   
    ?>
    <div class="alerta"> No hay entradas de la categoría.</div>

    <?php endif;?>

<!-- estos artículos deberían estar en un section -->
    

</main> 

<!-- PIE DE PÁGINA -->

<?php require_once 'includes/pie.php'; ?>
