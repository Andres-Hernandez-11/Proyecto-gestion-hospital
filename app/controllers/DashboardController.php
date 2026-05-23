<?php

require_once '../app/middleware/AuthMiddleware.php';

class DashboardController
{
    public function index()
    {
        AuthMiddleware::handle();

        $view =
        '../app/views/dashboard/index.php';

        require_once
        '../app/views/layouts/app.php';
    }
}