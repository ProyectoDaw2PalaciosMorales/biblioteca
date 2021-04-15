<?php
class Bo_libros extends CI_Model{
    
   
    
    
    public function borrarLibros($id){
        
        R::trash(R::load('libros',$id));
     
        redirect(base_url()."Administrador_mostrarlibros/mostrar_libros");
        
    }
}
    

?>