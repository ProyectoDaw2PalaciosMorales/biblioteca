<?php
class Mostrar_libros extends CI_Model{
   
    public function getBo_libros()
    {
        return R::findAll('libros',' ORDER BY titulo');
    }
    
    
    public function getlibrosById($id)
    {
        return  R::load('libros', $id);
        
       
    }
    
    
    }

    

?>