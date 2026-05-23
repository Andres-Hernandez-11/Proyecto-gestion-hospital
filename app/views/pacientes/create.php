<h1 class="page-title">
    Nuevo Paciente
</h1>

<br>

<div class="form-card">

<form
action="<?= BASE_URL ?>pacientes/store"
method="POST">

<div class="form-grid">

<div class="form-group">
<label>Tipo Documento</label>

<select
name="tipo_documento"
class="form-control"
required>

<option value="CC">CC</option>
<option value="TI">TI</option>
<option value="CE">CE</option>

</select>
</div>

<div class="form-group">
<label>Documento</label>

<input
type="text"
name="documento"
class="form-control"
required>
</div>

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
<label>Fecha nacimiento</label>

<input
type="date"
name="fecha_nacimiento"
class="form-control"
required>
</div>

<div class="form-group">
<label>Genero</label>

<select
name="genero"
class="form-control"
required>

<option value="Masculino">
Masculino
</option>

<option value="Femenino">
Femenino
</option>

</select>
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

<div class="form-group full-width">
<label>Direccion</label>

<textarea
name="direccion"
class="form-control">
</textarea>
</div>

<div class="form-group">
<label>EPS</label>

<input
type="text"
name="eps"
class="form-control">
</div>

<div class="form-group">
<label>Grupo sanguineo</label>

<input
type="text"
name="grupo_sanguineo"
class="form-control">
</div>

<div class="form-group full-width">
<label>Alergias</label>

<textarea
name="alergias"
class="form-control">
</textarea>
</div>

</div>

<br>

<button
type="submit"
class="btn btn-primary">

Guardar Paciente

</button>

</form>

</div>