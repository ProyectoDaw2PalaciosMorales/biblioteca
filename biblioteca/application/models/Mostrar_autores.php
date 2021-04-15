<?php
class Mostrar_autores extends CI_Model{
   
    public function getBo_autores()
    {
        return R::findAll('autores');
    }
    
    
 
    
   
    
    }

    

?>