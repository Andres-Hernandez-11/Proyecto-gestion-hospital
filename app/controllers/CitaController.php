<?php

require_once '../app/middleware/AuthMiddleware.php';
require_once '../app/models/Cita.php';

class CitaController
{
    public function index()
    {
        AuthMiddleware::handle();

        $citaModel =
        new Cita();

        $citas =
        $citaModel
        ->obtenerCitas();

        $view =
        '../app/views/citas/index.php';

        require_once
        '../app/views/layouts/app.php';
    }

    public function create()
    {
        AuthMiddleware::handle();

        $citaModel =
        new Cita();

        $pacientes =
        $citaModel
        ->obtenerPacientes();

        $doctores =
        $citaModel
        ->obtenerDoctores();

        $view =
        '../app/views/citas/create.php';

        require_once
        '../app/views/layouts/app.php';
    }

    public function store()
    {
        AuthMiddleware::handle();

        $citaModel =
        new Cita();

        $citaModel->guardar([
            'id_paciente' =>
                intval($_POST['id_paciente']),

            'id_doctor' =>
                intval($_POST['id_doctor']),

            'fecha_cita' =>
                $_POST['fecha_cita'],

            'hora_cita' =>
                $_POST['hora_cita'],

            'motivo' =>
                limpiar($_POST['motivo']),

            'consultorio' =>
                limpiar($_POST['consultorio']),

            'estado' =>
                limpiar($_POST['estado'])
        ]);

        $_SESSION['success'] =
        'Cita creada correctamente';

        header(
            'Location: '
            . BASE_URL .
            'citas'
        );

        exit();
    }

    public function edit()
    {
        AuthMiddleware::handle();

        $id =
        intval($_GET['id']);

        $citaModel =
        new Cita();

        $cita =
        $citaModel
        ->obtenerPorId($id);

        $pacientes =
        $citaModel
        ->obtenerPacientes();

        $doctores =
        $citaModel
        ->obtenerDoctores();

        $view =
        '../app/views/citas/edit.php';

        require_once
        '../app/views/layouts/app.php';
    }

    public function update()
    {
        AuthMiddleware::handle();

        $citaModel =
        new Cita();

        $citaModel->actualizar([
            'id' =>
                intval($_POST['id']),

            'id_paciente' =>
                intval($_POST['id_paciente']),

            'id_doctor' =>
                intval($_POST['id_doctor']),

            'fecha_cita' =>
                $_POST['fecha_cita'],

            'hora_cita' =>
                $_POST['hora_cita'],

            'motivo' =>
                limpiar($_POST['motivo']),

            'consultorio' =>
                limpiar($_POST['consultorio']),

            'estado' =>
                limpiar($_POST['estado'])
        ]);

        $_SESSION['success'] =
        'Cita actualizada correctamente';

        header(
            'Location: '
            . BASE_URL .
            'citas'
        );

        exit();
    }

    public function delete()
    {
        AuthMiddleware::handle();

        $id =
        intval($_GET['id']);

        $citaModel =
        new Cita();

        $citaModel
        ->eliminar($id);

        $_SESSION['success'] =
        'Cita eliminada correctamente';

        header(
            'Location: '
            . BASE_URL .
            'citas'
        );

        exit();
    }
}