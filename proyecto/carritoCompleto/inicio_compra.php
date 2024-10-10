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

    <form action="carrito" method="POST">
        <label for="producto">Producto:</label>
        <input type="text" name="producto" id="producto" required><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad" required min="1"><br>

        <input type="submit" value="Agregar al carrito">
    </form>

    <table>
        <thead>
            <h3>Contenido del Carrito</h3>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tr>
            <td>a</td>
        </tr>
    </table><br>
    <input type="reset" value="Vaciar carrito">
    
</body>
</html>