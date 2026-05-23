<?php

require_once '../app/models/Usuario.php';

class AuthController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $correo = trim($_POST['correo']);
            $password = trim($_POST['password']);

            $usuarioModel = new Usuario();

            $usuario = $usuarioModel->login($correo);

            if (
                $usuario &&
                password_verify(
                    $password,
                    $usuario['password']
                )
            )
            {
                session_regenerate_id(true);

                $_SESSION['usuario'] =
                [
                    'id' => $usuario['id_usuario'],
                    'nombre' => $usuario['nombre'],
                    'rol' => $usuario['id_rol']
                ];

                header('Location: ' . BASE_URL . 'dashboard');
                exit();
            }

            echo "Correo o contraseña incorrectos";
        }

        require_once '../app/views/auth/login.php';
    }

    public function logout()
    {
        session_destroy();

        header('Location: ' . BASE_URL);
        exit();
    }
}