<?php

require_once '../app/middleware/AuthMiddleware.php';
require_once '../app/models/Doctor.php';

class DoctorController
{
    public function index()
    {
        AuthMiddleware::handle();

        $doctorModel =
        new Doctor();

        $doctores =
        $doctorModel
        ->obtenerDoctores();

        $view =
        '../app/views/doctores/index.php';

        require_once
        '../app/views/layouts/app.php';
    }

    public function create()
    {
        AuthMiddleware::handle();

        $doctorModel =
        new Doctor();

        $especialidades =
        $doctorModel
        ->obtenerEspecialidades();

        $view =
        '../app/views/doctores/create.php';

        require_once
        '../app/views/layouts/app.php';
    }

    public function store()
    {
        AuthMiddleware::handle();

        $doctorModel =
        new Doctor();

        $doctorModel->guardar([
            'nombre' =>
                limpiar($_POST['nombre']),

            'apellido' =>
                limpiar($_POST['apellido']),

            'telefono' =>
                limpiar($_POST['telefono']),

            'correo' =>
                limpiar($_POST['correo']),

            'licencia_medica' =>
                limpiar($_POST['licencia_medica']),

            'horario' =>
                limpiar($_POST['horario']),

            'id_especialidad' =>
                $_POST['id_especialidad']
        ]);

        $_SESSION['success'] =
        'Doctor creado correctamente';

        header(
            'Location: '
            . BASE_URL .
            'doctores'
        );

        exit();
    }

    public function edit()
    {
        AuthMiddleware::handle();

        $id = intval($_GET['id']);

        $doctorModel =
        new Doctor();

        $doctor =
        $doctorModel
        ->obtenerPorId($id);

        $especialidades =
        $doctorModel
        ->obtenerEspecialidades();

        $view =
        '../app/views/doctores/edit.php';

        require_once
        '../app/views/layouts/app.php';
    }

    public function update()
    {
        AuthMiddleware::handle();

        $doctorModel =
        new Doctor();

        $doctorModel
        ->actualizar([
            'id' =>
                intval($_POST['id']),

            'nombre' =>
                limpiar($_POST['nombre']),

            'apellido' =>
                limpiar($_POST['apellido']),

            'telefono' =>
                limpiar($_POST['telefono']),

            'correo' =>
                limpiar($_POST['correo']),

            'licencia_medica' =>
                limpiar($_POST['licencia_medica']),

            'horario' =>
                limpiar($_POST['horario']),

            'id_especialidad' =>
                intval($_POST['id_especialidad'])
        ]);

        $_SESSION['success'] =
        'Doctor actualizado correctamente';

        header(
            'Location: '
            . BASE_URL .
            'doctores'
        );

        exit();
    }

    public function delete()
    {
        AuthMiddleware::handle();

        $id = intval($_GET['id']);

        $doctorModel =
        new Doctor();

        $doctorModel
        ->eliminar($id);

        $_SESSION['success'] =
        'Doctor eliminado correctamente';

        header(
            'Location: '
            . BASE_URL .
            'doctores'
        );

        exit();
    }
}