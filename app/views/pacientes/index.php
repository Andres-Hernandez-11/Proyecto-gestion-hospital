<div class="page-header">

    <h1 class="page-title">
        Gestión de Pacientes
    </h1>

    <a
        href="<?= BASE_URL ?>pacientes/create"
        class="btn btn-primary">

        + Nuevo Paciente
    </a>

</div>

<div class="table-container">

    <table>

        <thead>

            <tr>
                <th>ID</th>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>EPS</th>
                <th>Acciones</th>
            </tr>

        </thead>

        <tbody>

        <?php foreach($pacientes as $paciente): ?>

            <tr>

                <td>
                    <?= $paciente['id_paciente'] ?>
                </td>

                <td>
                    <?= htmlspecialchars($paciente['documento']) ?>
                </td>

                <td>
                    <?= htmlspecialchars($paciente['nombre']) ?>
                    <?= htmlspecialchars($paciente['apellido']) ?>
                </td>

                <td>
                    <?= htmlspecialchars($paciente['telefono']) ?>
                </td>

                <td>
                    <?= htmlspecialchars($paciente['eps']) ?>
                </td>

                <td>

                    <a
                    class="btn btn-warning"
                    href="<?= BASE_URL ?>pacientes/edit?id=<?= $paciente['id_paciente'] ?>">

                        Editar

                    </a>

                    <a
                    class="btn btn-danger"
                    href="<?= BASE_URL ?>pacientes/delete?id=<?= $paciente['id_paciente'] ?>"
                    onclick="return confirm('¿Eliminar paciente?')">

                        Eliminar

                    </a>

                </td>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>