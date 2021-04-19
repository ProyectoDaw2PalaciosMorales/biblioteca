<?php 
        
class Perfil extends CI_Controller {
   
    public function perfil_usuario()
    {
        $id =  isset($_POST['id']) ? $_POST['id'] : null;
        $this->load->model('Perfilusuarios');
        $datos['usuario']=$this->Perfilusuarios->getusuaiosById($id);
        $datos['reservas']=$this->Perfilusuarios->getusuaiosreservas();
       
        $this->load->view('usuario/Perfilusuario',$datos);
    
     
    }
   
    }




?>