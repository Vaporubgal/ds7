<?php
classConexion{
    //especificar las credenciales de base de datos
    private $host="localhost";
    private $db_name="productos_api";
    private $username="root";
    private $password="";
    public  $conn;
    
    //obtener la conexion del abase de datos
    public function obtenerConexion(){
        $this->conn=null;
        
        try{
            $this->conn=newPDO("mysql:host=".$this->host.";dbname=".$this->db_name,$this->username,$this->password);
            $this->conn->exec("setnamesutf8");
            }catch(PDOException$exception){
                echo"Error de conexion a base de datos:".$exception->getMessage();
                }
                
                return $this->conn;
            }
        }
?>