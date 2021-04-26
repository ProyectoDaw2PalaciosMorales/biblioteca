<?php 
        
class Home extends CI_Controller {
   
    public function index()
    {
       
        
        $this->load->model('Usuarios_model');
        $this->Usuarios_model->crearadmin();
    
        frame($this,'index');
        
    }
   
    }




?>