<?php
include("class_lib.php");

$PosicionArreglo = new PosicionArreglo();
$arreglo = $PosicionArreglo->generarArreglo();
$resultadoMayor = $PosicionArreglo->encontrarMayor($arreglo);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>laboratorio 8.2</title>
</head>
<body>
    <?php
    echo "Arreglo: ";
    echo implode(", ", $arreglo);
    echo "<br>El elemento mayor es " . $resultadoMayor["mayorValor"] . " y está en la posición " . $resultadoMayor["posicionMayor"] . " del arreglo.";
    ?>
</body>
</html>
