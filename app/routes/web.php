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

    default:

        require_once '../app/controllers/ErrorController.php';

        $controller = new ErrorController();
        $controller->notFound();

    break;
}