<?php

class Autores extends CI_Controller{
 
    public function autor(){
       
       
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        
            $this->load->view('autor/autor_deseado');}
        
            else{ $this->load->view('errorurl');}
    }
    
    public function autorpost(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            $autor =  isset($_POST['autor']) ? $_POST['autor'] : null;
        
        
        $this->load->model('union_de_tablas');
        $this->union_de_tablas-> filtro($autor);
        }
        else{ $this->load->view('errorurl');}
    }
    
}

?>