<?php

class Reserva_libros extends CI_Controller{
 
   
    
    public function reserva(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            $id=isset($_POST['id']) ? $_POST['id'] : null;
            $id_usuario=isset($_POST['id_usuario']) ? $_POST['id_usuario'] : null;
            $cantidad=isset($_POST['cantidad']) ? $_POST['cantidad'] : null;
            $titulo=isset($_POST['titulo']) ? $_POST['titulo'] : null;
            $this->load->model('Reservar_libros');
            
            $this->Reservar_libros->reservalibros($id_usuario,$id,$cantidad,$titulo);
        
     }
        else{ $this->load->view('errorurl');}
    }
}

?>