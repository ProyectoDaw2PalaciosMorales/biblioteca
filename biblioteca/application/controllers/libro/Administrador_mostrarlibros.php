<?php

class Administrador_mostrarlibros extends CI_Controller{
 
    public function mostrar_libros(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        $this->load->model('mostrarlibrosadministrador_libros');
        $datos['libros'] = $this->mostrarlibrosadministrador_libros->getBo_libros();
        $this->load->view('libro/mostrarlibrosadministrador',$datos);}
        else{ $this->load->view('errorurl');}
        
    }
    
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