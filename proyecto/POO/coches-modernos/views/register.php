<?php include 'header.php'; ?>

<section class="formulario">
  <h2>Registrarse</h2>
  <form action="register.php" method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Correo electrónico" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <button type="submit">Registrarse</button>
  </form>
</section>

<?php include 'footer.php'; ?>