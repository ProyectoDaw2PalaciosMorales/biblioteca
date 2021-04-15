<?php
class Bo_perfil extends CI_Model{
    
    
    
    
    public function borrarperfil($id){
        
        R::trash(R::load('usuarios',$id));
        redirect(base_url());
       
       
        
        
    }
}
    

?>