<?php
include '../util/conexion.php';
session_start();

if ($_SESSION['rol'] != 'docente' && $_SESSION['rol'] != 'director') {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $grado = $_GET['grado'];
    $seccion = $_GET['seccion'];
    $mes = $_GET['mes'];
    $ano = $_GET['ano'];

    $stmt = $conn->prepare("SELECT * FROM asistencias WHERE grado = :grado AND seccion = :seccion AND YEAR(fecha) = :ano AND MONTH(fecha) = :mes");
    $stmt->bindParam(':grado', $grado);
    $stmt->bindParam(':seccion', $seccion);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':mes', $mes);
    $stmt->execute();

    $asistencias = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
                </ul>
            </div>
            <button id="login-button">Login</button>
        </div>

        <!-- Contenido principal -->

        <div class="container-fluid main-content">
            <!-- Encabezado de bienvenida -->
            <h2 id="welcome-heading">Bienvenido, Auxiliar</h2>
            <p id="welcome-message">¿Qué desea hacer?</p>

            <!-- Contenedor para los botones -->
            <div class="button-container">
                <button class="btn btn-register"><a href="http://localhost/IEMCC/view/alumnosR.php">Registrar asistencia</a></button>
                <button class="btn btn-view"><a href="http://localhost/IEMCC/view/verAsistencias.php">Ver asistencias</a< /button>
            </div>
        </div>

<!--Ver las asistencias-->
        <div class="container">
        <h2>Consulta de Asistencias</h2>
        <form method="get">
            <select name="grado" required>
                <option value="1">1°</option>
                <option value="2">2°</option>
                <option value="3">3°</option>
                <option value="4">4°</option>
                <option value="5">5°</option>
            </select>
            <input type="text" name="seccion" placeholder="Sección" required>
            <input type="number" name="mes" placeholder="Mes" min="1" max="12" required>
            <input type="number" name="ano" placeholder="Año" min="2000" max="2100" required>
            <button type="submit">Buscar</button>
        </form>
        <?php if (isset($asistencias)): ?>
            <h2>Resultados de la búsqueda</h2>
            <table>
                <tr>
                    <th>Alumno</th>
                    <th>Grado</th>
                    <th>Sección</th>
                    <th>Fecha</th>
                    <th>Asistencia</th>
                    <th>Justificativo</th>
                </tr>
                <?php foreach ($asistencias as $asistencia): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($asistencia['alumno']); ?></td>
                        <td><?php echo htmlspecialchars($asistencia['grado']); ?></td>
                        <td><?php echo htmlspecialchars($asistencia['seccion']); ?></td>
                        <td><?php echo htmlspecialchars($asistencia['fecha']); ?></td>
                        <td><?php echo htmlspecialchars($asistencia['asistencia']); ?></td>
                        <td>
                            <?php if ($asistencia['justificativo']): ?>
                                <a href="<?php echo htmlspecialchars($asistencia['justificativo']); ?>" target="_blank">Ver Justificativo</a>
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost/IEMCC/js/gestion.js"></script>
</body>

</html>