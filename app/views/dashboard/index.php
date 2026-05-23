<h1 class="page-title">
Dashboard Hospitalario
</h1>

<br>

<div class="dashboard-grid">

<div class="card-stat">
<h3>Pacientes</h3>
<h2><?= $totalPacientes ?></h2>
</div>

<div class="card-stat">
<h3>Doctores</h3>
<h2><?= $totalDoctores ?></h2>
</div>

<div class="card-stat">
<h3>Citas</h3>
<h2><?= $totalCitas ?></h2>
</div>

<div class="card-stat">
<h3>Pendientes</h3>
<h2><?= $citasPendientes ?></h2>
</div>

</div>

<div class="table-container">

<h2>
Últimas citas médicas
</h2>

<br>

<table>

<thead>

<tr>
<th>Paciente</th>
<th>Doctor</th>
<th>Fecha</th>
<th>Hora</th>
<th>Estado</th>
</tr>

</thead>

<tbody>

<?php foreach($ultimasCitas as $cita): ?>

<tr>

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

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>