<?php
include '../util/conexion.php';
session_start();

if ($_SESSION['rol'] != 'auxiliar') {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alumno = $_POST['alumno'];
    $grado = $_POST['grado'];
    $seccion = $_POST['seccion'];
    $fecha = $_POST['fecha'];
    $asistencia = $_POST['asistencia'];
    $auxiliar_id = $_SESSION['user_id'];

    if (!empty($_FILES['justificativo']['name'])) {
        $target_dir = "uploads/justificativos/";
        $target_file = $target_dir . basename($_FILES["justificativo"]["name"]);
        if (move_uploaded_file($_FILES["justificativo"]["tmp_name"], $target_file)) {
            $justificativo = $target_file;
        } else {
            echo "Hubo un error subiendo el archivo.";
            exit;
        }
    } else {
        $justificativo = null;
    }

    $stmt = $conn->prepare("INSERT INTO asistencias (alumno, grado, seccion, fecha, asistencia, justificativo, auxiliar_id) VALUES (:alumno, :grado, :seccion, :fecha, :asistencia, :justificativo, :auxiliar_id)");
    $stmt->bindParam(':alumno', $alumno);
    $stmt->bindParam(':grado', $grado);
    $stmt->bindParam(':seccion', $seccion);
    $stmt->bindParam(':fecha', $fecha);
    $stmt->bindParam(':asistencia', $asistencia);
    $stmt->bindParam(':justificativo', $justificativo);
    $stmt->bindParam(':auxiliar_id', $auxiliar_id);

    if ($stmt->execute()) {
        echo "Asistencia subida correctamente.";
    } else {
        echo "Error al subir la asistencia.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Beginner:wght@400..700&family=Playwrite+CU:wght@100..400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost//IEMCC/styles/gestionA.css">
    <title>Document</title>
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div>
                <div class="sidebar-heading">
                    <img src="http://localhost/IEMCC/util/img/LOGO.png" alt="Logo" class="logo-img">
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" data-bs-toggle="collapse" data-bs-target="#submenu2">Asistencias</li>
                    <div id="submenu2" class="collapse submenu">
                        <a href="http://localhost/IEMCC/view/alumnos.php">Alumnos</a>
                        <a href="">Docentes</a>
                        <a href="#">Auxiliares</a>
                    </div>
                    <li class="list-group-item">Actividades</li>
                    <li class="list-group-item">Informes</li>
                    <li class="list-group-item">Anuncios</li>
                    <li class="list-group-item">Exámenes</li>
                    <li class="list-group-item">Mensajes</li>
                    <li class="list-group-item"><a class="color" href="http://localhost/IEMCC/view/inicio.php">Inicio</a></li>
                </ul>
            </div>
            <button id="login-button">Login</button>
        </div>

        <div class="container-fluid main-content">
    <!-- Encabezado de bienvenida -->
    <h2 id="welcome-heading">Bienvenido, Auxiliar</h2>
    <p id="welcome-message">¿Qué desea hacer?</p>
    
    <!-- Contenedor para los botones -->
    <div class="button-container">
        <button class="btn btn-register">Registrar asistencia</button>
        <button class="btn btn-view"><a href="http://localhost/IEMCC/view/verAsistencias.php">Ver asistencias</a</button>
    </div>

    <!-- Formulario para registrar asistencia -->
    <form id="attendance-form" method="post" enctype="multipart/form-data">
        <h2 id="rgt-a">Registrar Asistencia</h2>
        <input type="text" name="alumno" placeholder="Nombre del Alumno" required>
        <input type="text" name="grado" placeholder="Grado" required>
        <input type="text" name="seccion" placeholder="Sección" required>
        <input type="date" name="fecha" required>
        <select name="asistencia" required>
            <option value="presente">Presente</option>
            <option value="ausente">Ausente</option>
            <option value="justificado">Justificado</option>
        </select>
        <input type="file" name="justificativo">
        <button id="login-button"><a href="http://localhost/IEMCC/view/login.php">Login</a></button>

    </form>
</div>




    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost/IEMCC/js/gestion.js"></script>
</body>

</html>