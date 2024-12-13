<?php require_once 'includes/cabecera.php'; ?>

<!-- BARRA LATERAL -->
<?php require_once 'includes/lateral.php' ?>

<main id="principal">
    <h1>Últimas entradas</h1>
    <p>
        Añade nuevas categorias para que los usuarios puedan usarlas
        al crear sus entradas
    </p>
    <form action="guardar-categoria.php" method="POST">
        <label for="nombre">Nombre de la categoria</label>
        <input type="text" name="nombre" id="nombre">

        <input type="submit" value="CREAR">
    </form>
</main>

<?php require_once 'includes/pie.php';?>