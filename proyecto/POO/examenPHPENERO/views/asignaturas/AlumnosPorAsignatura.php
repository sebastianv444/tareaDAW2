<section class="tabla">
<h2>Alumnos por Asignatura</h2>
    <table>
        <tr>
            <th>Asignatura</th>
            <th>Alumno</th>
        </tr>
        <?php 
        while($alum = $alumnos->fetch_object()):?>
            <tr>
                <td><?= $alum->nombre?></td>
                <td><?= $alum->Alumnos?></td>
            </tr>
        <?php endwhile;?>
    </table>

</section>