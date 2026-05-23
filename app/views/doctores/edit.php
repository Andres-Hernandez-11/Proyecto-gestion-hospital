<h1 class="page-title">
Editar Doctor
</h1>

<br>

<div class="form-card">

<form
action="<?= BASE_URL ?>doctores/update"
method="POST">

<input
type="hidden"
name="id"
value="<?= $doctor['id_doctor'] ?>">

<div class="form-grid">

<div class="form-group">
<label>Nombre</label>

<input
type="text"
name="nombre"
class="form-control"
value="<?= htmlspecialchars($doctor['nombre']) ?>"
required>
</div>

<div class="form-group">
<label>Apellido</label>

<input
type="text"
name="apellido"
class="form-control"
value="<?= htmlspecialchars($doctor['apellido']) ?>"
required>
</div>

<div class="form-group">
<label>Telefono</label>

<input
type="text"
name="telefono"
class="form-control"
value="<?= htmlspecialchars($doctor['telefono']) ?>">
</div>

<div class="form-group">
<label>Correo</label>

<input
type="email"
name="correo"
class="form-control"
value="<?= htmlspecialchars($doctor['correo']) ?>">
</div>

<div class="form-group">
<label>Licencia médica</label>

<input
type="text"
name="licencia_medica"
class="form-control"
value="<?= htmlspecialchars($doctor['licencia_medica']) ?>"
required>
</div>

<div class="form-group">
<label>Especialidad</label>

<select
name="id_especialidad"
class="form-control"
required>

<?php foreach($especialidades as $esp): ?>

<option
value="<?= $esp['id_especialidad'] ?>"
<?= $doctor['id_especialidad'] == $esp['id_especialidad']
? 'selected'
: '' ?>>

<?= htmlspecialchars($esp['nombre_especialidad']) ?>

</option>

<?php endforeach; ?>

</select>
</div>

<div class="form-group full-width">

<label>Horario</label>

<input
type="text"
name="horario"
class="form-control"
value="<?= htmlspecialchars($doctor['horario']) ?>">

</div>

</div>

<br>

<button
type="submit"
class="btn btn-primary">

Actualizar Doctor

</button>

<a
href="<?= BASE_URL ?>doctores"
class="btn btn-danger">

Cancelar

</a>

</form>

</div>