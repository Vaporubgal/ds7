<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>laboratorio 4.4</title>
</head>
<body>
    <?php
    $arreglo = array(); 
    $contador = 0; 

    if (isset($_POST['numero'])) {
        $numero = intval($_POST['numero']);

        if ($numero % 2 == 0) {
            if ($contador < 5) {
                $arreglo[] = $numero;
                $contador++;
                echo "Número $numero agregado exitosamente.<br>";
            } else {
                echo "Ya ha ingresado 5 números pares, no se pueden agregar más.<br>";
            }
        } else {
            echo "El número ingresado no es par. Por favor, ingrese un número par.<br>";
        }
    }

    if ($contador >= 5) {
        echo "Ha alcanzado el límite de 5 números pares.<br>";
    }
    ?>
    <form method="POST">
        <label for="numero">Ingrese un número par:</label>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" value="Agregar Número">
    </form>
</body>
</html>