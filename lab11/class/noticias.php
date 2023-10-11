<?php
require_once('modelo.php');

class noticia extends modeloCredencialesBD {
    protected $titulo;
    protected $texto;
    protected $categoria;
    protected $fecha;
    protected $imagen;

    public function __construct() {
        parent::__construct();
    }

    public function consultar_noticias() {
        $instruccion = "CALL sp_listar_noticias()";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if (!$resultado) {
            echo "Fallo al consultar las noticias";
        } else {
            $consulta->close();
            $this->_db->close();
            return $resultado;
        }
    }

        public function consultar_noticias_filtro ($campo, $valor) {
    $instruccion = "CALL sp_listar_noticias_filtro (' ".$campo."','".$valor."')";

    $consulta=$this->_db->query($instruccion);
    $resultado=$consulta->fetch_all (MYSQLI_ASSOC);
        if ($resultado) {
        return $resultado; 
        $resultado->close(); 
        $this->_db->close();
        }
    }

    public function contarNoticias() {
        $instruccion = "SELECT COUNT(*) as total FROM noticias";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_assoc();
        
        $consulta->close(); // Cerrar el resultado
    
        if (!$resultado) {
            return 0;
        } else {
            return $resultado['total'];
        }
    }
    
    public function consultarNoticiasPaginadas($inicio, $limite) {
        $stmt = $this->_db->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM noticias LIMIT ?, ?");
        $stmt->bind_param("ii", $inicio, $limite);
        $stmt->execute();
    
        $resultado = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    
        $stmt->close();
    
        $total = $this->_db->query("SELECT FOUND_ROWS() as total")->fetch_assoc();
    
        return [
            'noticias' => $resultado,
            'total' => $total['total']
        ];
    }
    
}



?>
