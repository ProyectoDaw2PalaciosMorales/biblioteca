<?php 
        
class Administrador_libros extends CI_Controller {
  
    public function panel_administrativo()
    {    session_start();
    
    if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        $this->load->view('modificar_libros');}
        
        else{ $this->load->view('errorurl');}
        
    }
   

}
?>