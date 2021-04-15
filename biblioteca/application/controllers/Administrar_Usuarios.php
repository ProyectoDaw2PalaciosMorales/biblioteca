<?php

class Administrar_Usuarios extends CI_Controller{
                
    public function usuarios(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        $this->load->model('Usuarios');
        $datos['usuarios'] = $this->Usuarios->getUsuarios();
        $this->load->view('usuarios',$datos);}
        else{ $this->load->view('errorurl');}
        
    }
    public function borrar(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        $id =  isset($_POST['id']) ? $_POST['id'] : null;
        
        $this->load->model('Usuarios');
        $this->Usuarios->borrarUsuarios($id);}
        else{ $this->load->view('errorurl');}
        
    }
    }

?>
