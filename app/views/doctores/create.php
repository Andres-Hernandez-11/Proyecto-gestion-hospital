<h1 class="page-title">
Nuevo Doctor
</h1>

<br>

<div class="form-card">

<form
action="<?= BASE_URL ?>doctores/store"
method="POST">

<div class="form-grid">

<div class="form-group">
<label>Nombre</label>

<input
type="text"
name="nombre"
class="form-control"
required>
</div>

<div class="form-group">
<label>Apellido</label>

<input
type="text"
name="apellido"
class="form-control"
required>
</div>

<div class="form-group">
<label>Telefono</label>

<input
type="text"
name="telefono"
class="form-control">
</div>

<div class="form-group">
<label>Correo</label>

<input
type="email"
name="correo"
class="form-control">
</div>

<div class="form-group">
<label>Licencia médica</label>

<input
type="text"
name="licencia_medica"
class="form-control"
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
value="<?= $esp['id_especialidad'] ?>">

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
placeholder="Ej: Lunes a Viernes 8AM - 5PM">

</div>

</div>

<br>

<button
type="submit"
class="btn btn-primary">

Guardar Doctor

</button>

</form>

</div>