<?php 
        
class Comentarios extends CI_Controller {
   
    public function comentario(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
          
         
           
            $datos['usuario']= R::findOne('usuarios', 'alias=?', [
                
               $_SESSION["nombre"]
            ]);
            
            
            
            frame($this,'comentario/Comentarios',$datos);
        }
            
            
            else{ $this->load->view('errorurl');}
    }
   
    public function comentariopost(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            $comentarios =  isset($_POST['comentarios']) ? $_POST['comentarios'] : null;
            $id =  isset($_POST['id']) ? $_POST['id'] : null;
            $id_libro =  isset($_POST['id_libro']) ? $_POST['id_libro'] : null;
          
              $this->load->model('In_comentarios');
              
              $this->In_comentarios->escribircomentario($id,$comentarios,$id_libro);
            
            
            
}
            
            else{ $this->load->view('errorurl');}
    }
    
    
    }




?>