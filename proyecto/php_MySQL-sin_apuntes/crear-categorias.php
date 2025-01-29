<?php require_once 'includes/cabecera.php'; ?>

<?php require_once 'includes/lateral.php'; ?>


<main id="principal">
<h1>Crear categoría</h1>
<p>
    Añade nuevas categorias para que los usuarios puedan
    usarlas al crear sus entradas
</p>

<form action = "guardar-categoria.php" method="POST">
    <label for="nombre">Nombre de la categoría</label>
    <input type="text" name="nombre" />
    
    <input type="submit" value="guardar">
</form>

</main>

<?php require_once 'includes/pie.php'; ?>