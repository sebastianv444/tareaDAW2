<section class="tabla">
<h2>Alumnos por Asignatura</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Fecha de Nacimiento</th>
        </tr>
        <?php 
        while($alum = $alumnos->fetch_object()):?>
            <tr>
                <td><?= $alum->nombre?></td>
                <td><?= $alum->apellido?></td>
                <td><?= $alum->email?></td>
                <td><?= $alum->fecha_nacimiento?></td>
            </tr>
        <?php endwhile;?>
    </table>

</section>