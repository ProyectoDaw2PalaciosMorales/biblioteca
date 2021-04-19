<?php

class Borrarlibros extends CI_Controller{
 
   
    
    public function borrar_libros(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        $id =  isset($_POST['id']) ? $_POST['id'] : null;
        
        $this->load->model('Bo_libros');
        $this->Bo_libros->borrarLibros($id);}
        else{ $this->load->view('errorurl');}
    }
}

?>