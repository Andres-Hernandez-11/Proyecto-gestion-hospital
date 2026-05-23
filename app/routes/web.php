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

    default:

        require_once '../app/controllers/ErrorController.php';

        $controller = new ErrorController();
        $controller->notFound();

    break;
}