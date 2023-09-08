<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>laboratorio 4.1</title>
</head>
<body>
<?php
if (($_POST['enviar'])) {
    $porcentajeVentas = floatval($_POST['Ventas']);

    if ($porcentajeVentas > 80) {
        echo '<img src="img/bien.png" alt="Imagen 1">';
    } elseif ($porcentajeVentas >= 50 && $porcentajeVentas <= 79) {
        echo '<img src="img/medio.png" alt="Imagen 2">';
    } else {
        echo '<img src="img/mal.png" alt="Imagen 3">';
    }
} else {
?>
    <h1>Indicador de Ventas</h1>
    <form action="lab41.php" method="POST">
        Porcentaje de Ventas: <input type="text" name="Ventas"><br>
        <input type="submit" name="enviar" value="Mostrar Imagen">
    </form>
<?php
}
?>
</body>
</html>
