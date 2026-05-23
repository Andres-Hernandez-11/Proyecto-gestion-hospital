<div class="page-header">

<h1 class="page-title">
Doctores
</h1>

<a
href="<?= BASE_URL ?>doctores/create"
class="btn btn-primary">

+ Nuevo Doctor

</a>

</div>

<div class="table-container">

<table>

<thead>
<tr>
<th>ID</th>
<th>Doctor</th>
<th>Especialidad</th>
<th>Correo</th>
<th>Horario</th>
<th>Acciones</th>
</tr>
</thead>

<tbody>

<?php foreach($doctores as $doctor): ?>

<tr>

<td>
<?= $doctor['id_doctor'] ?>
</td>

<td>
    <?= htmlspecialchars($doctor['nombre']) ?>
    <?= ' ' ?>
    <?= htmlspecialchars($doctor['apellido']) ?>
</td>

<td>
<?= htmlspecialchars($doctor['nombre_especialidad']) ?>
</td>

<td>
<?= htmlspecialchars($doctor['correo']) ?>
</td>

<td>
<?= htmlspecialchars($doctor['horario']) ?>
</td>

<td>

    <a
    class="btn btn-warning"
    href="<?= BASE_URL ?>doctores/edit?id=<?= $doctor['id_doctor'] ?>">

    Editar

    </a>

    <a
    class="btn btn-danger"
    href="<?= BASE_URL ?>doctores/delete?id=<?= $doctor['id_doctor'] ?>"
    onclick="return confirm('¿Eliminar doctor?')">

    Eliminar

    </a>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>