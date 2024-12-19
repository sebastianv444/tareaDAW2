<?php require_once 'includes/cabecera.php'?>

<?php require_once 'includes/lateral.php'?>

<?php 
    $entrada_actual = conseguirEntrada($db,$_GET['id']);

    if (!isset($entrada_actual['id'])) {
        header('Location: index.php');
    }
?>

<main id="principal">
    <h1>Editar entrada</h1>
    <p>Edita tu entrada: <?= $entrada_actual['titulo'];?></p>

    <form action="guardar-entrada.php?editar=<?= $entrada_actual['id'];?>" method="POST">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" value="<?= $entrada_actual['titulo']?>"/>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],"titulo"):'';?>

        <label for="descripcion">descripcion:</label>
        <textarea name="descripcion" id=""><?= $entrada_actual['descripcion'];?></textarea>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],"titulo"):'';?>
        
        <label for="categoria">Categoría</label>
        <select name="categoria" id="">
        <?php 
            $categorias = conseguirCategorias($db);
            if(!empty($categorias)):
                while($categoria = mysqli_fetch_assoc($categorias)):
        ?>

            <option value="<?=$categoria['id'];?>"
                <?php ($categoria['id'] == $entrada_actual['categoria_id']) ? 'selected = "selected"':'';?>><!-- esto hace que si se cumple se seleccione la opcion -->
                <?= $categoria['nombre'];?>
            </option>

        <?php
                endwhile;
            endif;
        ?>
        </select>

        <input type="submit" value="CREAR">
    </form>
    <?= borrarErrores();?>
</main>

<?php require_once 'includes/pie.php';?>