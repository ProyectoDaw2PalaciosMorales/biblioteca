<?php 
        
class Cerrar_sesion extends CI_Controller {
   
    public function cerrar()
    { 
    
        
        
        $this->load->model('cierre_sesion');
        
        $this->cierre_sesion->cerrarsesion();}
       
    }  
   
    



?>