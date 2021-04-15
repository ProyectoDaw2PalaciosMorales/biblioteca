<?php 
        
class Home extends CI_Controller {
   
    public function index()
    {
        $this->load->view('index');
        
        $this->load->model('Regi_conex_BD');
        $this->Regi_conex_BD->crearadmin();
        
    }
   
    }




?>