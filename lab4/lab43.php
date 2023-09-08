<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>laboratorio 4.3</title>
</head>
<body>

    <?php
    $arreglo = array();
    for ($i = 0; $i < 20; $i++) {
        $arreglo[] = rand(1, 100); 
    }

    $mayorValor = $arreglo[0];
    $posicionMayor = 0;
    
    for ($i = 1; $i < count($arreglo); $i++) {
        if ($arreglo[$i] > $mayorValor) {
            $mayorValor = $arreglo[$i];
            $posicionMayor = $i;
        }
    }

    echo "Arreglo: ";
    echo implode(", ", $arreglo);
    echo "<br>El elemento mayor es $mayorValor y está en la posición $posicionMayor del arreglo.";
    ?>
</body>
</html>