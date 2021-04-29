<?php
class In_comentarios extends CI_Model{
    
  
   
    public function  escribircomentario($id,$comentarios,$id_libro)
    
    {
      
        
        $comentario = R::dispense('comentarios');
        $usuario = R::load('usuarios', $id);
        $libros = R::load('libros', $id_libro);
        
    
        
        $comentario->comentario=$comentarios;
       $comentario->usuario=$usuario;
       $comentario->libros=$libros;
       R::store($comentario);
       
        
    
      
          
            
            
            
            
            redirect(base_url()."usuario/Usuarios/Bienvenidos_u");
            
            
            
            
            
            
            
        }
    
    }
    

?>