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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="http://localhost/IEMCC/js/gestion.js"></script>
</body>

</html>