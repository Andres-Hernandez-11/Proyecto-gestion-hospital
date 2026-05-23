<div class="page-header">

    <h1 class="page-title">
        Citas Médicas
    </h1>

    <a
        href="<?= BASE_URL ?>citas/create"
        class="btn btn-primary">

        + Nueva Cita

    </a>

</div>

<div class="table-container">

<table>

<thead>

<tr>
<th>ID</th>
<th>Paciente</th>
<th>Doctor</th>
<th>Fecha</th>
<th>Hora</th>
<th>Estado</th>
<th>Acciones</th>
</tr>

</thead>

<tbody>

<?php foreach($citas as $cita): ?>

<tr>

<td>
<?= $cita['id_cita'] ?>
</td>

<td>
<?= htmlspecialchars($cita['paciente_nombre']) ?>
<?= ' ' ?>
<?= htmlspecialchars($cita['paciente_apellido']) ?>
</td>

<td>
<?= htmlspecialchars($cita['doctor_nombre']) ?>
<?= ' ' ?>
<?= htmlspecialchars($cita['doctor_apellido']) ?>
</td>

<td>
<?= htmlspecialchars($cita['fecha_cita']) ?>
</td>

<td>
<?= htmlspecialchars($cita['hora_cita']) ?>
</td>

<td>
<?= htmlspecialchars($cita['estado']) ?>
</td>

<td>

<a
class="btn btn-warning"
href="<?= BASE_URL ?>citas/edit?id=<?= $cita['id_cita'] ?>">

Editar

</a>

<a
class="btn btn-danger"
href="<?= BASE_URL ?>citas/delete?id=<?= $cita['id_cita'] ?>"
onclick="return confirm('¿Eliminar cita?')">

Eliminar

</a>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>