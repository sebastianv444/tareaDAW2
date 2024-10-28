<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
</head>

<body>
    <h1>Carrito de Compras</h1>

    <!-- Formulario para agregar productos -->
    <form action="carrito_completo.php" method="POST">
        <label for="producto">Producto:</label>
        <input type="text" name="producto" id="producto">
        <br>
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad" min="1">
        <br>
        <button type="submit" name="accion" value="agregar">Agregar al carrito</button>
    </form>

    <hr>

    <!-- Mostrar el carrito de compras -->
    <h2>Contenido del Carrito</h2>
    <?php if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])): ?>
        <form action="carrito_completo.php" method="POST">
            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                    </tr>/inicio_compra.php
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['carrito'] as $producto => $cantidad): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($producto); ?></td>
                            <td>
                                <input type="number" 
                                name="nueva_cantidad[<?php echo 
                                ($producto); ?>]" value="<?php echo $cantidad; ?>" min="1">
                            </td>
                            <td>
                                <button type="submit" name="accion" value="actualizar">Actualizar</button>
                                <button type="submit" name="accion" value="eliminar" onclick="document.getElementById('producto_eliminar').value='<?php echo htmlspecialchars($producto); ?>'">Eliminar</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- Campo oculto para eliminar un producto -->
            <input type="hidden" name="producto_eliminar" id="producto_eliminar">

            <br>
            <button type="submit" name="accion" value="vaciar">Vaciar carrito</button>
        </form>
    <?php else: ?>
        <p>El carrito está vacío.</p>
    <?php endif; ?>
</body>

</html>