<?php

require_once '../app/middleware/AuthMiddleware.php';

class DashboardController
{
    public function index()
    {
        AuthMiddleware::handle();

        require_once '../app/views/dashboard/index.php';
    }
}