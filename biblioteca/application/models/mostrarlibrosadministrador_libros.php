<?php
class mostrarlibrosadministrador_libros extends CI_Model{
    
    public function getBo_libros()
    {
        return R::findAll('libros',' ORDER BY titulo');
    }
    
    
    
    
}
    

?>