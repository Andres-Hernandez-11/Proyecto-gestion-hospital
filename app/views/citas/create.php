<h1 class="page-title">
Nueva Cita Médica
</h1>

<br>

<div class="form-card">

<form
action="<?= BASE_URL ?>citas/store"
method="POST">

<div class="form-grid">

<div class="form-group">

<label>Paciente</label>

<select
name="id_paciente"
class="form-control"
required>

<?php foreach($pacientes as $paciente): ?>

<option
value="<?= $paciente['id_paciente'] ?>">

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
value="<?= $doctor['id_doctor'] ?>">

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
required>

</div>

<div class="form-group">

<label>Hora cita</label>

<input
type="time"
name="hora_cita"
class="form-control"
required>

</div>

<div class="form-group full-width">

<label>Motivo</label>

<textarea
name="motivo"
class="form-control">
</textarea>

</div>

<div class="form-group">

<label>Consultorio</label>

<input
type="text"
name="consultorio"
class="form-control">

</div>

<div class="form-group">

<label>Estado</label>

<select
name="estado"
class="form-control">

<option value="Pendiente">
Pendiente
</option>

<option value="Confirmada">
Confirmada
</option>

<option value="Cancelada">
Cancelada
</option>

<option value="Finalizada">
Finalizada
</option>

</select>

</div>

</div>

<br>

<button
type="submit"
class="btn btn-primary">

Guardar Cita

</button>

</form>

</div>