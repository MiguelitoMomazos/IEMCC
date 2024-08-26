<?php
session_start();
if ($_SESSION['rol'] != 'auxiliar') {
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
    <title> I.E Mercedes Cabello de Carbonera </title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        h2 {
            color: #b30000;
            font-size: 24px;
            margin-bottom: 20px;
            font-family: 'Georgia', serif;
        }

        a {
            display: inline-block;
            margin: 10px 0;
            padding: 10px 20px;
            background-color: #b30000;
            color: #f7c94a;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        a:hover {
            background-color: #d11a2a;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Bienvenido, Auxiliar</h2>
    <a href='subir_asistencias.php'>Registrar Asistencia</a>
    <a href='ver_mensajes.php'>Ver Mensajes</a>
</div>

</body>
</html>
