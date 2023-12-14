<?php
require_once('config.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);

    // Llamar al procedimiento almacenado para registrar usuario
    $stmt = $conn->prepare("CALL sp_insertar_usuario(?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $correo, $hashed_password);
    $stmt->execute();
    $stmt->close();

    // Cerrar la conexión
    $conn->close();

    // Redirigir a la página de confirmación
    header("Location: registro.html");
    exit();
}
?>
