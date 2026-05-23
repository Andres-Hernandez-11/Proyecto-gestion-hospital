<?php

require_once '../app/middleware/AuthMiddleware.php';
require_once '../app/models/Paciente.php';

class PacienteController
{
    public function index()
    {
        AuthMiddleware::handle();

        $pacienteModel = new Paciente();

        $pacientes =
        $pacienteModel->obtenerPacientes();

        $view =
        '../app/views/pacientes/index.php';

        require_once
        '../app/views/layouts/app.php';
    }

    public function create()
    {
        AuthMiddleware::handle();

        $view =
        '../app/views/pacientes/create.php';

        require_once
        '../app/views/layouts/app.php';
    }

    public function store()
    {
        AuthMiddleware::handle();

        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $data =
            [
                'tipo_documento' =>
                    limpiar($_POST['tipo_documento']),

                'documento' =>
                    limpiar($_POST['documento']),

                'nombre' =>
                    limpiar($_POST['nombre']),

                'apellido' =>
                    limpiar($_POST['apellido']),

                'fecha_nacimiento' =>
                    $_POST['fecha_nacimiento'],

                'genero' =>
                    $_POST['genero'],

                'telefono' =>
                    limpiar($_POST['telefono']),

                'correo' =>
                    limpiar($_POST['correo']),

                'direccion' =>
                    limpiar($_POST['direccion']),

                'eps' =>
                    limpiar($_POST['eps']),

                'grupo_sanguineo' =>
                    limpiar($_POST['grupo_sanguineo']),

                'alergias' =>
                    limpiar($_POST['alergias'])
            ];

            $pacienteModel =
            new Paciente();

            if(
                $pacienteModel
                ->existeDocumento(
                    $data['documento']
                )
            )
            {
                $_SESSION['error'] =
                'El documento ya existe';

                header(
                    'Location: '
                    . BASE_URL .
                    'pacientes/create'
                );

                exit();
            }

            $pacienteModel
            ->guardar($data);

            $_SESSION['success'] =
            'Paciente creado correctamente';

            header(
                'Location: '
                . BASE_URL .
                'pacientes'
            );

            exit();
        }
    }

    public function edit()
    {
        AuthMiddleware::handle();

        $id = $_GET['id'];

        $pacienteModel =
        new Paciente();

        $paciente =
        $pacienteModel
        ->obtenerPorId($id);

        $view =
        '../app/views/pacientes/edit.php';

        require_once
        '../app/views/layouts/app.php';
    }

    public function update()
    {
        AuthMiddleware::handle();

        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $data =
            [
                'id' =>
                    $_POST['id'],

                'tipo_documento' =>
                    $_POST['tipo_documento'],

                'documento' =>
                    htmlspecialchars(trim($_POST['documento'])),

                'nombre' =>
                    htmlspecialchars(trim($_POST['nombre'])),

                'apellido' =>
                    htmlspecialchars(trim($_POST['apellido'])),

                'fecha_nacimiento' =>
                    $_POST['fecha_nacimiento'],

                'genero' =>
                    $_POST['genero'],

                'telefono' =>
                    htmlspecialchars(trim($_POST['telefono'])),

                'correo' =>
                    htmlspecialchars(trim($_POST['correo'])),

                'direccion' =>
                    htmlspecialchars(trim($_POST['direccion'])),

                'eps' =>
                    htmlspecialchars(trim($_POST['eps'])),

                'grupo_sanguineo' =>
                    htmlspecialchars(trim($_POST['grupo_sanguineo'])),

                'alergias' =>
                    htmlspecialchars(trim($_POST['alergias']))
            ];

            $pacienteModel =
            new Paciente();

            $pacienteModel
            ->actualizar($data);

            header(
                'Location: '
                . BASE_URL .
                'pacientes'
            );

            exit();
        }
    }

    public function delete()
    {
        AuthMiddleware::handle();

        $id = intval($_GET['id']);

        $pacienteModel =
        new Paciente();

        $pacienteModel
        ->eliminar($id);

        $_SESSION['success'] =
        'Paciente eliminado correctamente';

        header(
            'Location: '
            . BASE_URL .
            'pacientes'
        );

        exit();
    }
}