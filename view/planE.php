<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/IEMCC//styles/gestionA.css" class="">
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
                    <li class="list-group-item" data-bs-toggle="collapse" data-bs-target="#submenu1">Académico</li>
                    <div id="submenu1" class="collapse submenu">
                        <a href="http://localhost/IEMCC/view/planE.php">Plan de Estudios</a>
                        <a href="#">Horarios</a>
                    </div>
                    <li class="list-group-item" data-bs-toggle="collapse" data-bs-target="#submenu2">Asistencias</li>
                    <div id="submenu2" class="collapse submenu">
                        <a href="http://localhost/IEMCC/view/docentes.php">Docentes</a>
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
        <div id="content-wrapper" class="container-fluid">
        <h1 class="my-4">Cursos Disponibles</h1>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">MATEMATICA</h5>
                        <p class="card-text">Docente: XXXXX XXXXX XXXXX</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">COMUNICACIÓN</h5>
                        <p class="card-text">Docente: XXXXX XXXXX XXXXX</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">CSS</h5>
                        <p class="card-text">Docente: XXXXX XXXXX XXXXX</p>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">CyT</h5>
                        <p class="card-text">Docente: XXXXX XXXXX XXXXX</p>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">EPT</h5>
                        <p class="card-text">Docente: XXXXX XXXXX XXXXX</p>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">INGLES</h5>
                        <p class="card-text">Docente: XXXXX XXXXX XXXXX</p>
                    </div>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ARTE Y CULTURA</h5>
                        <p class="card-text">Docente: XXXXX XXXXX XXXXX</p>
                    </div>
                </div>
            </div>
            <!-- Card 8 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">RELIGIÓN</h5>
                        <p class="card-text">Docente: XXXXX XXXXX XXXXX</p>
                    </div>
                </div>
            </div>
            <!-- Card 9 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">XXXXX</h5>
                        <p class="card-text">Docente: XXXXX XXXXX XXXXX</p>
                    </div>
                </div>
            </div>
            <!-- Card 10 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">XXXXX</h5>
                        <p class="card-text">Docente: XXXXX XXXXX XXXXX</p>
                    </div>
                </div>
            </div>
            <!-- Card 11 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">XXXXX</h5>
                        <p class="card-text">Docente: XXXXX XXXXX XXXXX</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost/IEMCC//js/gestion.js"></script>
</body>

</html>