<h1>Registrarse</h1>

<form action="index.php?Controller=Usuario&action=salvar" method="POST">

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre">

    <label for="apellidos">Apellido:</label>
    <input type="text" name="apellidos">

    <label for="email">email:</label>
    <input type="text" name="email">

    <label for="password">Password:</label>
    <input type="text" name="password">

    <input type="submit" value="Registrarse">
</form>