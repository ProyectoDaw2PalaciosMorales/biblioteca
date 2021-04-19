<?php 
        
class Login extends CI_Controller {
  
    public function acceso()
    {
        $nombre =  isset($_POST['usuario']) ? $_POST['usuario'] : null;
        $password =  isset($_POST['password']) ? $_POST['password'] : null;
        session_start();
        if($nombre!=null && $password!=null){
            $_SESSION['nombre'] =$nombre;
            $_SESSION['password'] =$password;}
        
        $this->load->model('Ini_conex_bd');
        
        $this->Ini_conex_bd->verificarLogin($_SESSION['nombre'], $_SESSION['password']);
        
       
        
    }
    
    
}


?>