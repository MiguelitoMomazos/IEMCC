<?php
// Configuración de los datos de conexión
$servername = "localhost";  // Host del servidor MySQL
$username = "root";         // Usuario de MySQL
$password = "";             // Contraseña del usuario de MySQL (cadena vacía por defecto en XAMPP)
$database = "ie_mcc";       // Nombre de la base de datos

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} else {
    echo "Conexión exitosa";
}

// Aquí puedes colocar el código para ejecutar consultas SQL, manipular la base de datos, etc.

// Cerrar la conexión (es opcional, ya que PHP la cerrará automáticamente al finalizar el script)
?>
