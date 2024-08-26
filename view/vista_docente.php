<?php
session_start();
if ($_SESSION['rol'] != 'docente') {
    header("Location: login.php");
    exit();
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo mcc.png" type="img/png">
    <title>Dashboard Docente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 90%;
            max-width: 600px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #b30000;
            margin-bottom: 20px;
        }
        a {
            color: #b30000;
            text-decoration: none;
            font-size: 18px;
            margin: 10px;
            display: inline-block;
        }
        a:hover {
            text-decoration: underline;
        }
        .logout-button {
            margin-top: 20px;
            padding: 10px;
            background-color: #e60000;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .logout-button:hover {
            background-color: #c70000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido, Docente</h1>
        <a href="consultar_asistencias.php">Consultar Asistencias</a>
        <form method="post" style="margin-top: 20px;">
            <button type="submit" name="logout" class="logout-button">Cerrar Sesión</button>
        </form>
    </div>
</body>
</html>
