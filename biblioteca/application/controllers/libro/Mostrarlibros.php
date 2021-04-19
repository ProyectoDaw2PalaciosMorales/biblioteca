<?php 
        
class Mostrarlibros extends CI_Controller {
   
    public function mostrar()
    {    session_start();
  
    if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        $this->load->model('Mostrar_libros');
        
         $datos['libros'] = $this->Mostrar_libros->getBo_libros();
    
         $this->load->view('libro/mostrar_librosinsercion',$datos);}
        
         else{ $this->load->view('errorurl');}
        
         
    }
    
    public function mostrarautores()
    { session_start();
    
    if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        $this->load->model('In_autor');
   
        
        $datos['autores'] = $this->In_autor ->getBo_autores();
      
        
        $this->load->view('autor/autorinsert',$datos);
        
    }
    
    else{ $this->load->view('errorurl');}
    
    }
    
    public function mostrarusuario()
    { session_start();
    
    if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        $this->load->model('Mostrar_libros');
        $this->load->model('Anularreservar_libros');
     
        $datos['libros'] = $this->Mostrar_libros->getBo_libros();
        $datos['anulaciones'] = $this->Anularreservar_libros-> mostrarboton();
   
     $this->load->view('libro/mostrar_librosusuarios',$datos);
    
    }
        
        else{ $this->load->view('errorurl');}
        
    }
    
    public function mostraractualizacion()
    {
        session_start();
        if(isset( $_SESSION['idcolor'])){
            
            $_SESSION['idcolor'];
        }else{
           
            $_SESSION['idcolor']="";
            
        }
      
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
       
     
       
    $this->load->model('Mostrar_libros');
    $datos['libros'] = $this->Mostrar_libros->getBo_libros();
    
    $datos['color'] = $this->Mostrar_libros->getlibrosById($_SESSION['idcolor']);
    $this->load->view('libro/mostrar_librosact',$datos);}
  
    else{ $this->load->view('errorurl');}
    
    
    }
    
     public function mostraractualizacionautores()
     {
     
         session_start();
         if(isset( $_SESSION['idcolorautor'])){
             
             $_SESSION['idcolorautor'];
         }else{
             
             $_SESSION['idcolorautor']="";
             
         }
         
         if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
             $this->load->model('In_autor');
             $datos['autores'] = $this->In_autor->getBo_autores();
             
             $datos['color'] = $this->In_autor->getlautoresById($_SESSION['idcolorautor']);
          
             
            $this->load->view('autor/mostrar_autoresact',$datos);
         
         }
             
             else{ $this->load->view('errorurl');}
     
    
    
    }
}



?>