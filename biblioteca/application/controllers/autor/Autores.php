<?php

class Autores extends CI_Controller{
 
   public function autor(){
       
       
        
            frame($this,'autor/autor_deseado');
        
            
    }
    
    public function autorpost(){
        session_start();
        
      
            $autor =  isset($_POST['autor']) ? $_POST['autor'] : null;
        
        
        $this->load->model('Autores_model');
        $this->Autores_model-> filtro($autor);
        
      
    }
    
    
    
    public function actualizar(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            $id =  isset($_POST['id']) ? $_POST['id'] : null;
            $this->load->model('Autores_model');
            
            $datos['autor'] = $this->Autores_model-> getlautoresById($id);
            
            
            
            frame($this,'autor/Actualizar_autores',$datos);
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
            
            
            $this->load->model('Autores_model');
            session_start();
            if($id!=null){
                $_SESSION['idcolorautor'] =$id;
            }
            $this->Autores_model-> actualizarautores($id,$nombre,$ciudad,$fecha_nacimiento);
        }
        else{ $this->load->view('errorurl');}
    }
    public function borrar(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            $id =  isset($_POST['id']) ? $_POST['id'] : null;
            
            $this->load->model('Autores_model');
            $this->Autores_model->borrar($id);}
            else{ $this->load->view('errorurl');}
    }
    public function mostrar_autoresadninistrador(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            $this->load->model('Autores_model');
            $datos['autores'] = $this->Autores_model->getBo_autores();
            frame($this,'autor/mostrarautores',$datos);}
            else{ $this->load->view('errorurl');}
            
    }
    
    public function mostrarautores()
    { session_start();
    
    if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        $this->load->model('Autores_model');
        
        
        $datos['autores'] = $this->Autores_model->getBo_autores();
        
        
        frame($this,'autor/autorinsert',$datos);
        
    }
    
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
            $this->load->model('Autores_model');
            $datos['autores'] = $this->Autores_model->getBo_autores();
            
            $datos['color'] = $this->Autores_model->getlautoresById($_SESSION['idcolorautor']);
            
            
            frame($this,'autor/mostrar_autoresact',$datos);
            
        }
        
        else{ $this->load->view('errorurl');}
        
        
        
    }
    
    public function insertarautor(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            
            
            frame($this,'autor/Insertar_autor');
            
            
        }
        else{ $this->load->view('errorurl');}
    }
    
    public function insertarautorpost(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            $nombre_autor =  isset($_POST['nombre_autor']) ? $_POST['nombre_autor'] : null;
            $ciudad =  isset($_POST['ciudad']) ? $_POST['ciudad'] : null;
            $fecha_naciento =  isset($_POST['fechanacimento']) ? $_POST['fechanacimento'] : null;
            
            
            $this->load->model('Autores_model');
            $this->Autores_model-> insertarautor($nombre_autor,$ciudad,$fecha_naciento);
            
        }
        else{ $this->load->view('errorurl');}
        
    }
    
}

?>