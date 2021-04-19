<?php
class In_comentarios extends CI_Model{
    
  
   
    public function  escribircomentario($id,$comentarios)
    
    {
      
        
        $comentario = R::dispense('comentarios');
        $usuario = R::load('usuarios', $id);
        
    
        
        $comentario->comentario=$comentarios;
       $comentario->usuario=$usuario;
        
       R::store($comentario);
       
        
    
      
          
            
            
            
            
            redirect(base_url()."usuario/Bienvenido/Bienvenidos_u");
            
            
            
            
            
            
            
        }
    
    }
    

?>