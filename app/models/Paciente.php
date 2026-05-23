<?php

require_once '../app/models/Conexion.php';

class Paciente
{
    private $conexion;

    public function __construct()
    {
        $db = new Conexion();
        $this->conexion = $db->conectar();
    }

    public function obtenerPacientes()
    {
        $sql = "SELECT * FROM pacientes
                ORDER BY id_paciente DESC";

        $stmt =
        $this->conexion->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardar($data)
    {
        $sql = "INSERT INTO pacientes
        (
            tipo_documento,
            documento,
            nombre,
            apellido,
            fecha_nacimiento,
            genero,
            telefono,
            correo,
            direccion,
            eps,
            grupo_sanguineo,
            alergias
        )
        VALUES
        (
            :tipo_documento,
            :documento,
            :nombre,
            :apellido,
            :fecha_nacimiento,
            :genero,
            :telefono,
            :correo,
            :direccion,
            :eps,
            :grupo_sanguineo,
            :alergias
        )";

        $stmt =
        $this->conexion->prepare($sql);

        return $stmt->execute($data);
    }

    public function obtenerPorId($id)
    {
        $sql = "SELECT * FROM pacientes
                WHERE id_paciente = :id";

        $stmt =
        $this->conexion->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizar($data)
    {
        $sql = "UPDATE pacientes SET

            tipo_documento = :tipo_documento,
            documento = :documento,
            nombre = :nombre,
            apellido = :apellido,
            fecha_nacimiento = :fecha_nacimiento,
            genero = :genero,
            telefono = :telefono,
            correo = :correo,
            direccion = :direccion,
            eps = :eps,
            grupo_sanguineo = :grupo_sanguineo,
            alergias = :alergias

            WHERE id_paciente = :id";

        $stmt =
        $this->conexion->prepare($sql);

        return $stmt->execute($data);
    }

    public function eliminar($id)
    {
        $sql = "DELETE FROM pacientes
                WHERE id_paciente = :id";

        $stmt =
        $this->conexion->prepare($sql);

        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }

    public function existeDocumento($documento)
    {
        $sql = "SELECT id_paciente
                FROM pacientes
                WHERE documento = :documento";

        $stmt =
        $this->conexion->prepare($sql);

        $stmt->bindParam(
            ':documento',
            $documento
        );

        $stmt->execute();

        return $stmt->fetch();
    }
}