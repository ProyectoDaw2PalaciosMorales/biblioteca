<?php

class Actualizar_Libros extends CI_Controller{
 
    public function actualizar(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        $id =  isset($_POST['id']) ? $_POST['id'] : null;
        $this->load->model('Actu_libros');
        $this->load->model('Actu_autor');
        $datos['libro'] = $this->Actu_libros->getlibrosById($id);
        $datos['generos'] = $this->Actu_libros->getBo_categoria();
        $datos['autores'] = $this->Actu_autor->getBo_autores();
     
      
      
        $this->load->view('libro/Actualizar_libros',$datos);}
        
        else{ $this->load->view('errorurl');}
    }
    
    public function actualizarpost(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
     
        $id =  isset($_POST['id']) ? $_POST['id'] : null;
        $titulo =  isset($_POST['titulo']) ? $_POST['titulo'] : null;
        $ano =  isset($_POST['ano']) ? $_POST['ano'] : null;
        $editorial =  isset($_POST['editorial']) ? $_POST['editorial'] : null;
        $autor =  isset($_POST['autor']) ? $_POST['autor'] : null;
        $ejemplares =  isset($_POST['ejemplares']) ? $_POST['ejemplares'] : null;
        $genero_literario =  isset($_POST['genero_literario']) ? $_POST['genero_literario'] : null;
       
        $this->load->model('Actu_libros');
        session_start();
        if($id!=null){
            $_SESSION['idcolor'] =$id;
           }
           $this->Actu_libros-> actualizarlibros($id,$titulo,$ano,$editorial,$autor,$ejemplares,$genero_literario);}
           else{ $this->load->view('errorurl');}
    }
}

?>