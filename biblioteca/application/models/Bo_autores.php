<?php
class Bo_autores extends CI_Model{
    
   
    
    
    public function borrarautores($id){
        
        R::trash(R::load('autores',$id));
     
        redirect(base_url()."Administrador_mostrarautores/mostrar_autores");
        
    }
}
    

?>