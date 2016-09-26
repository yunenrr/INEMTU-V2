<?php
/**
 * Clase que nos permite conectarnos con la base de datos
 */
class Connection
{
    /* Atributos */
    private $server;
    private $user;
    private $password;
    private $db;
    private $connection;
    
    /**
     * Método constructor
     */
    public function Connection()
    {
        $this->server = "163.178.107.130";
        $this->user = "adm";
        $this->password = "saucr.092";
        $this->db = "inemtu";
    }//Fin del método constructor
    
    /*
     * Método que nos permite obtener la conexión
     */
    public function getConnection()
    {
        $this->connection = mysqli_connect($this->server,$this->user,$this->password,$this->db);
        return $this->connection;
    }//Fin del método getConnection
    
    /**
     * Método que nos permite cerrar la conexión
     */
    public function closeConnection()
    {
        mysqli_close($this->connection);
    }//Fin del método closeConnection
}//Fin de la clase
?>