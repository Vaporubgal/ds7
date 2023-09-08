<?php
    if (isset($_POST['numero'])) {
        $numero = intval($_POST['numero']);

        if ($numero >= 0) {
            $factorial = 1;
            for ($i = 1; $i <= $numero; $i++) {
                $factorial *= $i;
            }
            echo "El factorial de $numero es $factorial.";
        } else {
            echo "Por favor, ingrese un número entero no negativo.";
        }
    } else {
        echo "Por favor, ingrese un número.";
    }
    ?>