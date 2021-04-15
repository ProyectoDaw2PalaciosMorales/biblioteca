<?php

class Generos extends CI_Controller{
 
    public function genero(){
       
       
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        
            $this->load->view('genero_deseado');}
        
            else{ $this->load->view('errorurl');}
    }
    
    public function generopost(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        
    
        
       $genero =  isset($_POST['genero_literario']) ? $_POST['genero_literario'] : null;
       $this->load->model('union_de_tablasgenero');
        $this->union_de_tablasgenero-> filtro($genero);
        }
        else{ $this->load->view('errorurl');}
    }
}

?>