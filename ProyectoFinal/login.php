<?php
include 'config.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$sql = "CALL sp_iniciar_sesion('$correo', '$contrasena')";
$result = $conn->query($sql);

echo '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        @import url(https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap);
        @import url(https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200&display=swap);
        h1{
            font-family: Dancing Script, cursive;
        {
    </style>
    <title>VM Photography - Galería</title>
</head>
<body>
    <header style="background-image: url(img/fondoHeader.jpg); background-size: cover; background-position: center;">
        <h1>VM Photography</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="portafolio.html">Portafolio</a></li>
            <li><a href="servicios.html">Servicios</a></li>
            <li><a href="contacto.html">Contacto</a></li>
            <li><a href="login.html">Iniciar Sesión</a></li>
        </ul>
    </nav>

    <main>
        <div class="gallery">';


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        
        $redireccion = $row['redireccion'];

        echo $row['mensaje'];

        if (!empty($redireccion)) {
            header("Location: " . $redireccion);
            exit();
        }
    }
} else {
    echo "Error al ejecutar el procedimiento almacenado";
}

$conn->close();
?>
