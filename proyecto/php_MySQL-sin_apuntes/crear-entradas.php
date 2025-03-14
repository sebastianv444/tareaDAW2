<?php require_once 'includes/cabecera.php'; ?>

<?php require_once 'includes/lateral.php'; ?>


<main id="principal">
<h1>Crear entrada</h1>
<p>
    Añade nueva entrada para que los usuarios puedan
    leer las cosas tan interesantes que escribo
</p>

<form action = "guardar-entrada.php" method="POST">
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" />
    <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo'): ''; ?>
   
    <label for="descripcion">Descripcion:</label>
    <textarea name="descripcion"></textarea>
    <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion'): ''; ?>

    <label for="categoria">Categoría:</label>
    <select name="categoria">
    <?php $categorias = conseguirCategorias($db);
            if(!empty($categorias)): 
                while($categoria = mysqli_fetch_assoc($categorias)):                  
        ?>
           <option value="<?=$categoria['id']; ?>">
            <?=$categoria['nombre']; ?>
           </option>

        <?php 
                endwhile;
            endif;
        ?>

    </select>
    
    <input type="submit" value="guardar">
</form>
<?= borrarErrores(); ?>
</main>

<?php require_once 'includes/pie.php'; ?>