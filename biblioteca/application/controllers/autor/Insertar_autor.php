<?php

class Insertar_autor extends CI_Controller{
 
    public function insertarautor(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            
           
            $this->load->view('autor/Insertar_autor');
            
         
        }
            else{ $this->load->view('errorurl');}
    }
    
    public function insertarautorpost(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        $nombre_autor =  isset($_POST['nombre_autor']) ? $_POST['nombre_autor'] : null;
        $ciudad =  isset($_POST['ciudad']) ? $_POST['ciudad'] : null;
        $fecha_naciento =  isset($_POST['fechanacimento']) ? $_POST['fechanacimento'] : null;
    
        
        $this->load->model('In_autor');
        $this->In_autor-> insertarautor($nombre_autor,$ciudad,$fecha_naciento);
      
        }
        else{ $this->load->view('errorurl');}
      
    }
}

?>