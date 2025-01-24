<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar  Producto</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th,td{
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        .btn{
            display: inline-block;
            padding: 10px;
            background: #4caf50;
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Productos</h1>
    <a href="index.php?action=crear" class="btn">Crear nuevo producto</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Descripción</th>
        </tr>
        <?php foreach($productos as $producto): ?>
            <tr>
                <td><?php echo ($producto["id"]);?></td>
                <td><?php echo ($producto["nombre"]);?></td>
                <td><?php echo ($producto["precio"]);?></td>
                <td><?php echo ($producto["descripcion"]);?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>