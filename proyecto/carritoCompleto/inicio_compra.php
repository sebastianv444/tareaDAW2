<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,tr,th,td{
        border: 1px solid black;
        border-collapse:collapse;
        padding: 15px;
    }
</style>
<body>
    
    <h1>carrito de compras</h1>

    <form action="carrito_completo.php" method="POST">
        <label for="producto">Producto:</label>
        <input type="text" name="producto" id="producto" required><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad" required min="1"><br>

        <button type="submit" name="accion" value="agregar">Agregar al cartio</button>
    </form>

    <hr>

    <!-- mostrar el carrito de compra -->
    <h3>Contenido del Carrito</h3>
    
    <?php
    if(isset($_SESSION['carrito']) && !empty($_SESSION['carrito']))?>

    <form action="carrito_completo.php" method="POST">
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <?php foreach($_SESSION['carrito'] as $producto => $cantidad): ?>
    
        <tr>
            <td><?php echo htmlspecialchars($producto); ?></td>
            <td>
                <input type="number" name="nueva_cantidad[<?php echo $producto;?>]" value="<?php echo $cantidad;?>" min="1">
            </td>
            <td>
                <button type="submit" name="accion" value="actualizar">Actualizar</button>
                <button type="submit" name="accion" value="eliminar" onclick="document.getElementById('producto_eliminar').value='<?php echo htmlspecialchars($producto)?>'">Eliminar</button>
            </td>
        </tr>
        <?php endforeach; ?>
    </table><br>


    <input type="hidden" value="Vaciar carrito">
    </form>
</body>
</html>