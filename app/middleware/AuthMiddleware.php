<?php

class AuthMiddleware
{
    public static function handle()
    {
        if (!isset($_SESSION['usuario']))
        {
            header('Location: ' . BASE_URL);
            exit();
        }
    }
}