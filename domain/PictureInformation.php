<?php
/**
 * Clase que contiene la información de las imágenes
 */
class PictureInformation
{
    /**************************** Declaración de atributos ********************/
    public $id;
    public $path;
    
    /**
     * Método constructor
     */
    public function PictureInformation($id,$path)
    {
        $this->id = $id;
        $this->path = $path;
    }//Fin del método constructor
}//Fin de la clase
?>