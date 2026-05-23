<?php

require_once '../app/models/Conexion.php';

class Doctor
{
    private $conexion;

    public function __construct()
    {
        $db = new Conexion();

        $this->conexion =
        $db->conectar();
    }

    public function obtenerDoctores()
    {
        $sql = "SELECT d.*,
                e.nombre_especialidad

                FROM doctores d

                INNER JOIN especialidades e
                ON d.id_especialidad =
                e.id_especialidad

                ORDER BY d.id_doctor DESC";

        $stmt =
        $this->conexion->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerEspecialidades()
    {
        $sql = "SELECT *
                FROM especialidades";

        $stmt =
        $this->conexion->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardar($data)
    {
        $sql = "INSERT INTO doctores
        (
            nombre,
            apellido,
            telefono,
            correo,
            licencia_medica,
            horario,
            id_especialidad
        )
        VALUES
        (
            :nombre,
            :apellido,
            :telefono,
            :correo,
            :licencia_medica,
            :horario,
            :id_especialidad
        )";

        $stmt =
        $this->conexion->prepare($sql);

        return $stmt->execute($data);
    }

    public function obtenerPorId($id)
    {
        $sql = "SELECT *
                FROM doctores
                WHERE id_doctor = :id";

        $stmt =
        $this->conexion->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizar($data)
    {
        $sql = "UPDATE doctores SET

        nombre = :nombre,
        apellido = :apellido,
        telefono = :telefono,
        correo = :correo,
        licencia_medica = :licencia_medica,
        horario = :horario,
        id_especialidad = :id_especialidad

        WHERE id_doctor = :id";

        $stmt =
        $this->conexion->prepare($sql);

        return $stmt->execute($data);
    }

    public function eliminar($id)
    {
        $sql = "DELETE FROM doctores
                WHERE id_doctor = :id";

        $stmt =
        $this->conexion->prepare($sql);

        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }
}