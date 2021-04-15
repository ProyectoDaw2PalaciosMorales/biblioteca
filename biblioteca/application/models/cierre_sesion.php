<?php
class cierre_sesion extends CI_Model{
   
    
    public function  cerrarsesion()
    
    {
        
           
        //Inicia una nueva sesión o reanuda la existente
        session_start();
       
        //Destruye toda la información registrada de una sesión
        session_destroy();
        
            
           
            redirect(base_url());
          
            
            
           
            
            
            
    }}
    
    

    

?>