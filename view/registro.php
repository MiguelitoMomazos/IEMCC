<!-- codigo php  ^-^ -->

<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $rol = $_POST['rol'];

    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, password, rol) VALUES (:nombre, :email, :password, :rol)");
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':rol', $rol);

    if ($stmt->execute()) {
        echo "Registro exitoso. <a href='login.php'>Iniciar sesión</a>";
    } else {
        echo "Error al registrar.";
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

        input, select {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
            box-sizing: border-box;
            font-size: 16px;
        }

        input:focus, select:focus {
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

        option {
            color: #b30000;
        }
    </style>
</head>
</head>
<form method="post">    
<h2>Registro de Usuario</h2>
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Correo electrónico" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <select name="rol"required>
        <option value="auxiliar">Auxiliar</option>
        <option value="docente">Docente</option>
        <option value="director">Director</option>
    </select>
    <button type="submit">Registrar</button>
</form>
<!-- Estilo del registro ^-^ -->
 