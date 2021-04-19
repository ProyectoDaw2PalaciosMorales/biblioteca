<?php

class Usuarios extends CI_Model{
    
    public function getUsuarios()
    {
        return R::findAll('usuarios',' ORDER BY nombre');
    }
    

            
    public function borrarUsuarios($id){
       
        R::trash(R::load('usuarios',$id));
      
        
       
        redirect(base_url()."usuario/Administrar_Usuarios/usuarios");
       
       
        
    }
}
            
                    
                    
                    
                    
                  
    
    

?>