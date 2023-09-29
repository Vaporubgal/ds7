<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>laboratorio 8.3</title>
</head>
<body>
    <form method="POST">
        <label for="n">Ingrese un número par (N):</label>
        <input type="number" id="n" name="n" step="2" required>
        <input type="submit" value="Generar Matriz">
    </form>
    <?php
    if (isset($_POST['n'])) {
        $n = intval($_POST['n']);

        if ($n % 2 == 0) {
            include("class_lib.php");

            $matrizIdentidad = GeneradorMatriz::generarMatrizIdentidad($n);
            echo $matrizIdentidad;
        } else {
            echo "Por favor, ingrese un número par.";
        }
    }
    ?>
</body>
</html>
