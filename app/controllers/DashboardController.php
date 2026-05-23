<?php

require_once '../app/middleware/AuthMiddleware.php';
require_once '../app/models/Dashboard.php';

class DashboardController
{
    public function index()
    {
        AuthMiddleware::handle();

        $dashboard =
        new Dashboard();

        $totalPacientes =
        $dashboard
        ->totalPacientes();

        $totalDoctores =
        $dashboard
        ->totalDoctores();

        $totalCitas =
        $dashboard
        ->totalCitas();

        $citasPendientes =
        $dashboard
        ->citasPendientes();

        $ultimasCitas =
        $dashboard
        ->ultimasCitas();

        $view =
        '../app/views/dashboard/index.php';

        require_once
        '../app/views/layouts/app.php';
    }
}