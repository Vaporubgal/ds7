<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>laboratorio 4.5</title>
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
            echo "<h2>Matriz Identidad de orden $n:</h2>";
            echo "<table border='1'>";
            
            for ($i = 0; $i < $n; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $n; $j++) {
                    if ($i == $j) {
                        echo "<td>1</td>";
                    } else {
                        echo "<td>0</td>";
                    }
                }
                echo "</tr>";
            }
            
            echo "</table>";
        } else {
            echo "Por favor, ingrese un número par.";
        }
    }
    ?>
</body>
</html>