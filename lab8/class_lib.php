<?php
class VentasIndicador {
    public function mostrarImagen($porcentajeVentas) {
        if ($porcentajeVentas > 80) {
            return '<img src="img/bien.png" alt="Imagen 1">';
        } elseif ($porcentajeVentas >= 50 && $porcentajeVentas <= 79) {
            return '<img src="img/medio.png" alt="Imagen 2">';
        } else {
            return '<img src="img/mal.png" alt="Imagen 3">';
        }
    }
}

class PosicionArreglo {
    private $arreglo = array();

    public function generarArreglo() {
        for ($i = 0; $i < 20; $i++) {
            $this->arreglo[] = rand(1, 100);
        }
    }

    public function encontrarMayor() {
        $mayorValor = $this->arreglo[0];
        $posicionMayor = 0;

        for ($i = 1; $i < count($this->arreglo); $i++) {
            if ($this->arreglo[$i] > $mayorValor) {
                $mayorValor = $this->arreglo[$i];
                $posicionMayor = $i;
            }
        }

        return ["mayorValor" => $mayorValor, "posicionMayor" => $posicionMayor];
    }

    public function obtenerArreglo() {
        return $this->arreglo;
    }
}

class GeneradorMatriz {
    public static function generarMatrizIdentidad($n) {
        $matriz = "<h2>Matriz Identidad de orden $n:</h2>";
        $matriz .= "<table border='1'>";

        for ($i = 0; $i < $n; $i++) {
            $matriz .= "<tr>";
            for ($j = 0; $j < $n; $j++) {
                if ($i == $j) {
                    $matriz .= "<td>1</td>";
                } else {
                    $matriz .= "<td>0</td>";
                }
            }
            $matriz .= "</tr>";
        }

        $matriz .= "</table>";

        return $matriz;
    }
}
?>



