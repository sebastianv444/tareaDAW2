<?php include 'header.php'; ?>

<!-- Hero Section -->
<header class="hero">
  <h1>Bienvenido a Coches Modernos</h1>
  <p>Explora nuestro catálogo de coches de última generación.</p>
</header>

<!-- Tipos de Coches -->
<section class="tipos-coches">
  <h2>Tipos de Coches</h2>
  <div class="tipos-container">
    <!-- Coche Mecánico -->
    <div class="tipo-card">
      <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&h=200&q=80" alt="Coche Mecánico">
      <h3>Coche Mecánico</h3>
      <p>Diseño clásico con transmisión manual.</p>
      <a href="<?php echo BASE_URL; ?>?page=catalogo&tipo=mecanico" class="btn">Ver Más</a>
    </div>

    <!-- Coche Automático -->
    <div class="tipo-card">
      <img src="https://images.unsplash.com/photo-1502877338535-766e1452684a?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&h=200&q=80" alt="Coche Automático">
      <h3>Coche Automático</h3>
      <p>Confort y tecnología en cada detalle.</p>
      <a href="<?php echo BASE_URL; ?>?page=catalogo&tipo=automatico" class="btn">Ver Más</a>
    </div>

    <!-- Coche Manual -->
    <div class="tipo-card">
      <img src="https://images.unsplash.com/photo-1504215680853-026ed2a45def?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&h=200&q=80" alt="Coche Manual">
      <h3>Coche Manual</h3>
      <p>Potencia y control al alcance de tu mano.</p>
      <a href="<?php echo BASE_URL; ?>?page=catalogo&tipo=manual" class="btn">Ver Más</a>
    </div>

    <!-- Coche Eléctrico -->
    <div class="tipo-card">
      <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&h=200&q=80" alt="Coche Eléctrico">
      <h3>Coche Eléctrico</h3>
      <p>Innovación y sostenibilidad en movimiento.</p>
      <a href="<?php echo BASE_URL; ?>?page=catalogo&tipo=electrico" class="btn">Ver Más</a>
    </div>
  </div>
  </div>
</section>

<?php include 'footer.php'; ?>