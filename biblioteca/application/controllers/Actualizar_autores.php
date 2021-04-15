<?php

class Actualizar_autores extends CI_Controller{
 
    public function actualizar(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        $id =  isset($_POST['id']) ? $_POST['id'] : null;
        $this->load->model('Actu_autor');
       
        $datos['autor'] = $this->Actu_autor-> getlautoresById($id);
     
      
      
        $this->load->view('Actualizar_autores',$datos);
        }
        
        else{ $this->load->view('errorurl');}
    }
    
    public function actualizarpost(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
     
        $id =  isset($_POST['id']) ? $_POST['id'] : null;
        $nombre =  isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $ciudad =  isset($_POST['ciudad']) ? $_POST['ciudad'] : null;
        $fecha_nacimiento =  isset($_POST['fechanacimento']) ? $_POST['fechanacimento'] : null;
       
     
       $this->load->model('Actu_autor');
       session_start();
        if($id!=null){
            $_SESSION['idcolorautor'] =$id;
          }
          $this->Actu_autor-> actualizarautores($id,$nombre,$ciudad,$fecha_nacimiento);
        }
           else{ $this->load->view('errorurl');}
    }
}

?>