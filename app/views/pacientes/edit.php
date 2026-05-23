<h1 class="page-title">
    Editar Paciente
</h1>

<br>

<div class="form-card">

    <form
        action="<?= BASE_URL ?>pacientes/update"
        method="POST">

        <input
            type="hidden"
            name="id"
            value="<?= $paciente['id_paciente'] ?>">

        <div class="form-grid">

            <div class="form-group">

                <label>Tipo Documento</label>

                <select
                    name="tipo_documento"
                    class="form-control"
                    required>

                    <option
                        value="CC"
                        <?= $paciente['tipo_documento'] == 'CC' ? 'selected' : '' ?>>

                        CC

                    </option>

                    <option
                        value="TI"
                        <?= $paciente['tipo_documento'] == 'TI' ? 'selected' : '' ?>>

                        TI

                    </option>

                    <option
                        value="CE"
                        <?= $paciente['tipo_documento'] == 'CE' ? 'selected' : '' ?>>

                        CE

                    </option>

                </select>

            </div>

            <div class="form-group">

                <label>Documento</label>

                <input
                    type="text"
                    name="documento"
                    class="form-control"
                    value="<?= htmlspecialchars($paciente['documento']) ?>"
                    required>

            </div>

            <div class="form-group">

                <label>Nombre</label>

                <input
                    type="text"
                    name="nombre"
                    class="form-control"
                    value="<?= htmlspecialchars($paciente['nombre']) ?>"
                    required>

            </div>

            <div class="form-group">

                <label>Apellido</label>

                <input
                    type="text"
                    name="apellido"
                    class="form-control"
                    value="<?= htmlspecialchars($paciente['apellido']) ?>"
                    required>

            </div>

            <div class="form-group">

                <label>Fecha nacimiento</label>

                <input
                    type="date"
                    name="fecha_nacimiento"
                    class="form-control"
                    value="<?= $paciente['fecha_nacimiento'] ?>"
                    required>

            </div>

            <div class="form-group">

                <label>Genero</label>

                <select
                    name="genero"
                    class="form-control"
                    required>

                    <option
                        value="Masculino"
                        <?= $paciente['genero'] == 'Masculino' ? 'selected' : '' ?>>

                        Masculino

                    </option>

                    <option
                        value="Femenino"
                        <?= $paciente['genero'] == 'Femenino' ? 'selected' : '' ?>>

                        Femenino

                    </option>

                    <option
                        value="Otro"
                        <?= $paciente['genero'] == 'Otro' ? 'selected' : '' ?>>

                        Otro

                    </option>

                </select>

            </div>

            <div class="form-group">

                <label>Telefono</label>

                <input
                    type="text"
                    name="telefono"
                    class="form-control"
                    value="<?= htmlspecialchars($paciente['telefono']) ?>">

            </div>

            <div class="form-group">

                <label>Correo</label>

                <input
                    type="email"
                    name="correo"
                    class="form-control"
                    value="<?= htmlspecialchars($paciente['correo']) ?>">

            </div>

            <div class="form-group full-width">

                <label>Direccion</label>

                <textarea
                    name="direccion"
                    class="form-control"><?= htmlspecialchars($paciente['direccion']) ?></textarea>

            </div>

            <div class="form-group">

                <label>EPS</label>

                <input
                    type="text"
                    name="eps"
                    class="form-control"
                    value="<?= htmlspecialchars($paciente['eps']) ?>">

            </div>

            <div class="form-group">

                <label>Grupo sanguineo</label>

                <input
                    type="text"
                    name="grupo_sanguineo"
                    class="form-control"
                    value="<?= htmlspecialchars($paciente['grupo_sanguineo']) ?>">

            </div>

            <div class="form-group full-width">

                <label>Alergias</label>

                <textarea
                    name="alergias"
                    class="form-control"><?= htmlspecialchars($paciente['alergias']) ?></textarea>

            </div>

        </div>

        <br>

        <button
            type="submit"
            class="btn btn-primary">

            Actualizar Paciente

        </button>

        <a
            href="<?= BASE_URL ?>pacientes"
            class="btn btn-danger">

            Cancelar

        </a>

    </form>

</div>