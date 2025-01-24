<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
    <style>
        .form-group{
            margin-bottom: 15px;
        }
        .label{
            display: block;
            margin-bottom: 5px;
        }
        input, textarea{
            width: 100%;
            padding: 8px;
        }
        button{
            padding: 10px;
            background: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h1>Crear nuevo producto</h1>

    <form action="" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="text" name="precio" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" required></textarea>
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>

</html>