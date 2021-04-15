<?php

class Insertar_Libros extends CI_Controller{
 
    public function insertarlibros(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            $this->load->model('In_libros');
           
            $this->load->view('Insertar_libros');
            
         
        }
            else{ $this->load->view('errorurl');}
    }
    
    public function insertarlibrospost(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        $titulo =  isset($_POST['titulo']) ? $_POST['titulo'] : null;
        $ano =  isset($_POST['ano']) ? $_POST['ano'] : null;
        $editorial =  isset($_POST['editorial']) ? $_POST['editorial'] : null;
        $autor =  isset($_POST['autor']) ? $_POST['autor'] : null;
        $ejemplares =  isset($_POST['ejemplares']) ? $_POST['ejemplares'] : null;
        $genero_literario =  isset($_POST['genero_literario']) ? $_POST['genero_literario'] : null;
        
        $this->load->model('in_libros');
        $this->in_libros-> insertarlibros($titulo,$ano,$editorial,$autor,$ejemplares,$genero_literario);
       $this->in_libros->getBo_libros($titulo);
        }
        else{ $this->load->view('errorurl');}
      
    }
}

?>