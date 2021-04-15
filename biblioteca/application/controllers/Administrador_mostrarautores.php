<?php

class Administrador_mostrarautores extends CI_Controller{
 
    public function mostrar_autores(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        $this->load->model('Mostrar_autores');
        $datos['autores'] = $this->Mostrar_autores->getBo_autores();
        $this->load->view('mostrarautores',$datos);}
        else{ $this->load->view('errorurl');}
        
    }
    
    public function borrar_autores(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        $id =  isset($_POST['id']) ? $_POST['id'] : null;
        
        $this->load->model('Bo_autores');
        $this->Bo_autores->borrarautores($id);}
        else{ $this->load->view('errorurl');}
    }
}

?>