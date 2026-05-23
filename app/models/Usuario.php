<?php

require_once '../app/models/Conexion.php';

class Usuario
{
    private $conexion;

    public function __construct()
    {
        $db = new Conexion();
        $this->conexion = $db->conectar();
    }

    public function login($correo)
    {
        $sql = "SELECT * FROM usuarios
                WHERE correo = :correo
                AND estado = 'Activo'
                LIMIT 1";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bindParam(':correo', $correo);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}