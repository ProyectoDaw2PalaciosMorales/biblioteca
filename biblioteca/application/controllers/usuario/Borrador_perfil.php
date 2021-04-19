<?php

class Borrador_perfil extends CI_Controller{
 
   
    
    public function borrar_perfil(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
          
        $id =  isset($_POST['id']) ? $_POST['id'] : null;
        $nombre =  isset($_POST['nombre']) ? $_POST['nombre'] : null;
        unlink("assets/fotosperfil/usuario-".$nombre.".png");
        $this->load->model('Bo_perfil');
        $this->Bo_perfil->borrarperfil($id);}
        else{ $this->load->view('errorurl');}
    }
}

?>