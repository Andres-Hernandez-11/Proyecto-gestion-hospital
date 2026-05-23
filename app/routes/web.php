<?php

$url = $_GET['url'] ?? 'login';

switch ($url)
{
    case 'login':

        require_once '../app/controllers/AuthController.php';

        $controller = new AuthController();
        $controller->login();

    break;

    case 'logout':

        require_once '../app/controllers/AuthController.php';

        $controller = new AuthController();
        $controller->logout();

    break;

    case 'dashboard':

        require_once '../app/controllers/DashboardController.php';

        $controller = new DashboardController();
        $controller->index();

    break;

    case 'pacientes':

        require_once '../app/controllers/PacienteController.php';

        $controller = new PacienteController();
        $controller->index();

    break;

    case 'pacientes/create':

        require_once '../app/controllers/PacienteController.php';

        $controller = new PacienteController();
        $controller->create();

    break;

    case 'pacientes/store':

        require_once '../app/controllers/PacienteController.php';

        $controller = new PacienteController();
        $controller->store();

    break;

    case 'pacientes/edit':

        require_once '../app/controllers/PacienteController.php';

        $controller = new PacienteController();
        $controller->edit();

    break;

    case 'pacientes/update':

        require_once '../app/controllers/PacienteController.php';

        $controller = new PacienteController();
        $controller->update();

    break;

    case 'pacientes/delete':

        require_once '../app/controllers/PacienteController.php';

        $controller = new PacienteController();
        $controller->delete();

    break;

    case 'doctores':

        require_once '../app/controllers/DoctorController.php';

        $controller = new DoctorController();
        $controller->index();

    break;

    case 'doctores/create':

        require_once '../app/controllers/DoctorController.php';

        $controller = new DoctorController();
        $controller->create();

    break;

    case 'doctores/store':

        require_once '../app/controllers/DoctorController.php';

        $controller = new DoctorController();
        $controller->store();

    break;

    case 'doctores/edit':

        require_once '../app/controllers/DoctorController.php';

        $controller = new DoctorController();
        $controller->edit();

    break;

    case 'doctores/update':

        require_once '../app/controllers/DoctorController.php';

        $controller = new DoctorController();
        $controller->update();

    break;

    case 'doctores/delete':

        require_once '../app/controllers/DoctorController.php';

        $controller = new DoctorController();
        $controller->delete();

    break;

    case 'citas':

        require_once '../app/controllers/CitaController.php';

        $controller = new CitaController();
        $controller->index();

    break;

    case 'citas/create':

        require_once '../app/controllers/CitaController.php';

        $controller = new CitaController();
        $controller->create();

    break;

    case 'citas/store':

        require_once '../app/controllers/CitaController.php';

        $controller = new CitaController();
        $controller->store();

    break;

    case 'citas/edit':

        require_once '../app/controllers/CitaController.php';

        $controller = new CitaController();
        $controller->edit();

    break;

    case 'citas/update':

        require_once '../app/controllers/CitaController.php';

        $controller = new CitaController();
        $controller->update();

    break;

    case 'citas/delete':

        require_once '../app/controllers/CitaController.php';

        $controller = new CitaController();
        $controller->delete();

    break;

    default:

        require_once '../app/controllers/ErrorController.php';

        $controller = new ErrorController();
        $controller->notFound();

    break;
}