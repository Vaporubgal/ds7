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
    $mensaje = $_POST['mensaje'];

    // Llamar al procedimiento almacenado
    $stmt = $conn->prepare("CALL sp_insertar_contacto(?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $correo, $mensaje);
    $stmt->execute();
    $stmt->close();

    // Cerrar la conexión
    $conn->close();

    // Redirigir a la página de confirmación
    header("Location: confirmacion.html");
    exit();
}
?>
