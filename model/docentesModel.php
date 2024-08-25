<?php

class AsistenciaDocentesModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function obtenerAsistencias() {
        $query = "SELECT * FROM asistencia_docentes";
        $result = $this->conn->query($query);
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }

    public function guardarAsistencia($nombreDocente, $fecha, $horaEntrada, $horaSalida, $estado) {
        $sql = "INSERT INTO asistencias (nombre_docente, fecha, hora_entrada, hora_salida, estado)
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssss", $nombreDocente, $fecha, $horaEntrada, $horaSalida, $estado);
        $stmt->execute();
    }
}
?>
