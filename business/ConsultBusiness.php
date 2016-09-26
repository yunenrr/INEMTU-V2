<?php
include './data/ConsultData.php';

class ConsultBusiness
{
    public $consultData;
    
    /**
     * Método constructor
     */
    public function ConsultBusiness()
    {
        $this->consultData = new ConsultData();
    }//Fin del método constructor
    
    /**
     * Método que nos permite obtener la información de todas las imágenes
     */
    public function getAllPictures()
    {
        $result = $this->consultData->getAllPictures();
        return $result;
    }//Fin del método
}//Fin de la clase
?>