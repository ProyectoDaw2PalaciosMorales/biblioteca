<?php 
        
class Bienvenido extends CI_Controller {
   
    public function Bienvenidos_u()
    {   
        
            session_start();
      
            if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
                
        $this->load->view('bienvenidos');
            
       
        
            
            }
        
        else{ $this->load->view('errorurl');}
       
        
    }
   
    }




?>