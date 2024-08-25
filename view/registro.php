<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> I.E Mercedes Cabello de carbonera </title>
    
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Registrar Nuevo Usuario</h1>
    <form action="registro.php" method="post">
        <label for="nombre_usuario">Nombre de Usuario:</label>
        <input type="text" name="nombre_usuario" id="nombre_usuario" required>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>
        
        <label for="rol">Rol:</label>
        <select name="rol" id="rol" required>
            <option value="auxiliar">Auxiliar</option>
            <option value="docente">Docente</option>
            <option value="director">Director</option>
        </select>
        
        <button type="submit">Registrar</button>
    </form>
    
    <a href="index.php">Volver al Inicio</a>
</body>
</html>

<?php
/*include 'bd.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = trim($_POST['nombre_usuario']);
    $password = trim($_POST['password']);
    $rol = $_POST['rol'];

    // Verificar si el usuario ya está registrado
    $sql = "SELECT * FROM usuarios WHERE nombre_usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nombre_usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<p>El usuario ya está registrado. Intente con otro.</p>";
    } else {
        // Insertar el nuevo usuario en la base de datos
        $sql = "INSERT INTO usuarios (nombre_usuario, password, rol) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nombre_usuario, $password, $rol);

        if ($stmt->execute()) {
            echo "<p>Usuario registrado exitosamente.</p>";
        } else {
            echo "<p>Error al registrar el usuario.</p>";
        }
    }

    $stmt->close();
    $conn->close();
}*/
?>
