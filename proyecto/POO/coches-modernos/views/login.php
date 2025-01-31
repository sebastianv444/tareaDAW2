<?php include 'header.php'; ?>

<section class="formulario">
  <h2>Iniciar Sesión</h2>
  <form action="login.php" method="POST">
    <input type="email" name="email" placeholder="Correo electrónico" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <button type="submit">Iniciar Sesión</button>
  </form>
</section>

<?php include 'footer.php'; ?>