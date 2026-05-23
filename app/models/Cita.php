<?php

require_once '../app/models/Conexion.php';

class Cita
{
    private $conexion;

    public function __construct()
    {
        $db = new Conexion();
        $this->conexion = $db->conectar();
    }

    public function obtenerCitas()
    {
        $sql = "SELECT c.*,

                p.nombre AS paciente_nombre,
                p.apellido AS paciente_apellido,

                d.nombre AS doctor_nombre,
                d.apellido AS doctor_apellido

                FROM citas c

                INNER JOIN pacientes p
                ON c.id_paciente = p.id_paciente

                INNER JOIN doctores d
                ON c.id_doctor = d.id_doctor

                ORDER BY c.id_cita DESC";

        $stmt =
        $this->conexion->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPacientes()
    {
        $sql = "SELECT *
                FROM pacientes
                ORDER BY nombre ASC";

        $stmt =
        $this->conexion->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerDoctores()
    {
        $sql = "SELECT *
                FROM doctores
                ORDER BY nombre ASC";

        $stmt =
        $this->conexion->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardar($data)
    {
        $sql = "INSERT INTO citas
        (
            id_paciente,
            id_doctor,
            fecha_cita,
            hora_cita,
            motivo,
            consultorio,
            estado
        )
        VALUES
        (
            :id_paciente,
            :id_doctor,
            :fecha_cita,
            :hora_cita,
            :motivo,
            :consultorio,
            :estado
        )";

        $stmt =
        $this->conexion->prepare($sql);

        return $stmt->execute($data);
    }

    public function obtenerPorId($id)
    {
        $sql = "SELECT *
                FROM citas
                WHERE id_cita = :id";

        $stmt =
        $this->conexion->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizar($data)
    {
        $sql = "UPDATE citas SET

        id_paciente = :id_paciente,
        id_doctor = :id_doctor,
        fecha_cita = :fecha_cita,
        hora_cita = :hora_cita,
        motivo = :motivo,
        consultorio = :consultorio,
        estado = :estado

        WHERE id_cita = :id";

        $stmt =
        $this->conexion->prepare($sql);

        return $stmt->execute($data);
    }

    public function eliminar($id)
    {
        $sql = "DELETE FROM citas
                WHERE id_cita = :id";

        $stmt =
        $this->conexion->prepare($sql);

        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }
}