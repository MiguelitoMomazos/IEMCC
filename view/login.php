<?php
include '../util/conexion.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['rol'] = $user['rol'];

        if ($user['rol'] == 'auxiliar') {
            header("Location: http://localhost/IEMCC//view/alumnos.php");
        } elseif ($user['rol'] == 'docente') {
            header("Location: vista_docente.php");
        } else {
            header("Location: http://localhost/IEMCC//view/alumnos.php");
        }
    } else {
        echo "Credenciales incorrectas.";
    }
}
?>
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

        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        h2 {
            color: #b30000;
            font-size: 28px;
            margin-bottom: 20px;
            font-family: 'Georgia', serif;
        }

        input {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
            box-sizing: border-box;
            font-size: 16px;
        }

        input:focus {
            border-color: #b30000;
            outline: none;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #b30000;
            color: #f7c94a;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #d11a2a;
            transform: scale(1.05);
        }
    </style>
</head>

</head>
<form method="post">
<h2>Iniciar Sesion</h2>
    <input type="email" name="email" placeholder="Correo electrónico" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <button type="submit">Iniciar sesión</button>
</form>
