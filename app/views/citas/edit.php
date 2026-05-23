<h1 class="page-title">
Editar Cita Médica
</h1>

<br>

<div class="form-card">

<form
action="<?= BASE_URL ?>citas/update"
method="POST">

<input
type="hidden"
name="id"
value="<?= $cita['id_cita'] ?>">

<div class="form-grid">

<div class="form-group">

<label>Paciente</label>

<select
name="id_paciente"
class="form-control"
required>

<?php foreach($pacientes as $paciente): ?>

<option
value="<?= $paciente['id_paciente'] ?>"
<?= $cita['id_paciente'] ==
$paciente['id_paciente']
? 'selected'
: '' ?>>

<?= htmlspecialchars($paciente['nombre']) ?>
<?= ' ' ?>
<?= htmlspecialchars($paciente['apellido']) ?>

</option>

<?php endforeach; ?>

</select>

</div>

<div class="form-group">

<label>Doctor</label>

<select
name="id_doctor"
class="form-control"
required>

<?php foreach($doctores as $doctor): ?>

<option
value="<?= $doctor['id_doctor'] ?>"
<?= $cita['id_doctor'] ==
$doctor['id_doctor']
? 'selected'
: '' ?>>

<?= htmlspecialchars($doctor['nombre']) ?>
<?= ' ' ?>
<?= htmlspecialchars($doctor['apellido']) ?>

</option>

<?php endforeach; ?>

</select>

</div>

<div class="form-group">

<label>Fecha cita</label>

<input
type="date"
name="fecha_cita"
class="form-control"
value="<?= $cita['fecha_cita'] ?>"
required>

</div>

<div class="form-group">

<label>Hora cita</label>

<input
type="time"
name="hora_cita"
class="form-control"
value="<?= $cita['hora_cita'] ?>"
required>

</div>

<div class="form-group full-width">

<label>Motivo</label>

<textarea
name="motivo"
class="form-control"><?= htmlspecialchars($cita['motivo']) ?></textarea>

</div>

<div class="form-group">

<label>Consultorio</label>

<input
type="text"
name="consultorio"
class="form-control"
value="<?= htmlspecialchars($cita['consultorio']) ?>">

</div>

<div class="form-group">

<label>Estado</label>

<select
name="estado"
class="form-control">

<option
value="Pendiente"
<?= $cita['estado'] == 'Pendiente'
? 'selected'
: '' ?>>

Pendiente

</option>

<option
value="Confirmada"
<?= $cita['estado'] == 'Confirmada'
? 'selected'
: '' ?>>

Confirmada

</option>

<option
value="Cancelada"
<?= $cita['estado'] == 'Cancelada'
? 'selected'
: '' ?>>

Cancelada

</option>

<option
value="Finalizada"
<?= $cita['estado'] == 'Finalizada'
? 'selected'
: '' ?>>

Finalizada

</option>

</select>

</div>

</div>

<br>

<button
type="submit"
class="btn btn-primary">

Actualizar Cita

</button>

<a
href="<?= BASE_URL ?>citas"
class="btn btn-danger">

Cancelar

</a>

</form>

</div>