<?php
include("class_lib.php");

if ($_POST['enviar']) {
    $porcentajeVentas = floatval($_POST['Ventas']);
    $ventasIndicator = new VentasIndicador();
    $imagen = $ventasIndicator->mostrarImagen($porcentajeVentas);

    echo $imagen;
} else {
?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>laboratorio 8.1</title>
    </head>
    <body>
        <h1>Indicador de Ventas</h1>
        <form action="lab41.php" method="POST">
            Porcentaje de Ventas: <input type="text" name="Ventas"><br>
            <input type="submit" name="enviar" value="Mostrar Imagen">
        </form>
    </body>
    </html>
<?php
}
?>
