<?php

require_once '../app/models/Conexion.php';

class Dashboard
{
    private $conexion;

    public function __construct()
    {
        $db = new Conexion();

        $this->conexion =
        $db->conectar();
    }

    public function totalPacientes()
    {
        $sql =
        "SELECT COUNT(*) total
        FROM pacientes";

        return $this->conexion
        ->query($sql)
        ->fetch()['total'];
    }

    public function totalDoctores()
    {
        $sql =
        "SELECT COUNT(*) total
        FROM doctores";

        return $this->conexion
        ->query($sql)
        ->fetch()['total'];
    }

    public function totalCitas()
    {
        $sql =
        "SELECT COUNT(*) total
        FROM citas";

        return $this->conexion
        ->query($sql)
        ->fetch()['total'];
    }

    public function citasPendientes()
    {
        $sql =
        "SELECT COUNT(*) total
        FROM citas
        WHERE estado='Pendiente'";

        return $this->conexion
        ->query($sql)
        ->fetch()['total'];
    }

    public function ultimasCitas()
    {
        $sql = "SELECT c.*,

                p.nombre paciente_nombre,
                p.apellido paciente_apellido,

                d.nombre doctor_nombre,
                d.apellido doctor_apellido

                FROM citas c

                INNER JOIN pacientes p
                ON c.id_paciente =
                p.id_paciente

                INNER JOIN doctores d
                ON c.id_doctor =
                d.id_doctor

                ORDER BY c.id_cita DESC
                LIMIT 5";

        $stmt =
        $this->conexion->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}