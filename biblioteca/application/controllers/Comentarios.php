<?php 
        
class Comentarios extends CI_Controller {
   
    public function comentario(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            $id =  isset($_POST['id']) ? $_POST['id'] : null;
           
            $this->load->model('Perfilusuarios');
            $datos['usuario']=$this->Perfilusuarios->getusuaiosById($id);
        
            
            
            $this->load->view('Comentarios',$datos);
        }
            
            
            else{ $this->load->view('errorurl');}
    }
   
    public function comentariopost(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            $comentarios =  isset($_POST['comentarios']) ? $_POST['comentarios'] : null;
            $id =  isset($_POST['id']) ? $_POST['id'] : null;
             
          
              $this->load->model('In_comentarios');
              
              $this->In_comentarios->escribircomentario($id,$comentarios);
            
            
            
}
            
            else{ $this->load->view('errorurl');}
    }
    
    
    }




?>