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
        $this->user = "sqlserver";
        $this->password = "saucr.12";
        $this->db = "INEMTU";
    }//Fin del método constructor
    
    /*
     * Método que nos permite obtener la conexión
     */
    public function getConnection()
    {
        $this->connection = mssql_connect($this->server,$this->user,$this->password);
        return $this->connection;
    }//Fin del método getConnection
    
    /**
     * Método que nos permite cerrar la conexión
     */
    public function closeConnection()
    {
        mssql_close($this->connection);
    }//Fin del método closeConnection
}//Fin de la clase
?>