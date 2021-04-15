<?php 
        
class errorcamporepitidos extends CI_Controller {
   
    public function errorusuario()
    {
     
        $this->load->view('errorrepetidosusuario');
        
       }
       public function errorlibro()
       {
           
           $this->load->view('errorrepetidolibro');
           
       }
       public function errorautor()
       {
           
           $this->load->view('errorrepetidoautor');
           
       }
    }
   
    




?>