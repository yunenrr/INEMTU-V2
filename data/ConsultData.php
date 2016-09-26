<?php
include './data/Connection.php';
include './domain/PictureInformation.php';

class ConsultData
{
    public $connect;
    
    /**
     * Método constructor
     */
    public function ConsultData()
    {
        $this->connect = new Connection();
    }//Fin del método
    
    /**
     * Método que nos permite obtener la información de todas las imágenes
     */
    public function getAllPictures()
    {
        //Abrimos conexión y pedimos los datos
        
        $result = mysqli_query($this->connect->getConnection(),'SELECT * FROM imagenes');
        $this->connect->closeConnection();
        
        $array = [];
        
        //While para llenar el array
        while($row = mysqli_fetch_array($result))
        {
            $currentPicture = new PictureInformation($row['id'], $row['ruta']);
            array_push($array,$currentPicture);
        }//Fin del while
        
        return $array;
    }//Fin del método
}//Fin de la clase