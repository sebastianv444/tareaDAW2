<h1>GESTIONAR CATEGORIAS</h1>

<a href="?controller=Categoria&action=crear" class="button button-small">Crear Nueva categoría</a>

<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
    </tr>

<?php while ($cat = $categorias->fetch_object()): ?>
    <tr>
        <td><?= $cat->id; ?></td>
        <td><?= $cat->nombre; ?></td>
    </tr>
<?php endwhile; ?>
</table>