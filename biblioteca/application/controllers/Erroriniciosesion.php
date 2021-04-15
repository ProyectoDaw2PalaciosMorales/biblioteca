<?php 
        
class Erroriniciosesion extends CI_Controller {
   
    public function error()
    {
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        $this->load->view('errorriniciosesion');
        
        header('refresh:5; url='.base_url());}
        else{ $this->load->view('errorurl');}
    }
   
    }




?>