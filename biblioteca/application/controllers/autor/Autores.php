<?php

class Autores extends CI_Controller{
    // cuando se pincha sobre el boton "Elija un autor para ver sus obras" 
   
   public function autor(){
       
       
        //se carga la vista autor_desado
            frame($this,'autor/autor_deseado');
        
            
    }
    
    public function autorpost(){
        session_start();
        
        //recojo los datos  de el formulario   de la vista autor_deseado.php
        // verifico que si los campos tienen datos los guarde en las variables en caso de que reciba campos vacios estos campos cojeran el valor null
            $autor =  isset($_POST['autor']) ? $_POST['autor'] : null;
        
        //se carga el modelo autores_model
        $this->load->model('Autores_model');
        //se carga la funcion del modelo autores_model.php linea 62
        $this->Autores_model-> filtro($autor);
        
      
    }
    
    
    //cuando se pulsa "sobre la papelara" de la vista mostrarautores.php
    public function actualizar(){
        session_start();
        //no se permte el accseo desde la url sin estar registrado
           if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
          
            // verifico que si los campos tienen datos los guarde en las variables en caso de que reciba campos vacios estos campos cojeran el valor null
            $id =  isset($_POST['id']) ? $_POST['id'] : null;
            //se carga el modelo autores_model
            $this->load->model('Autores_model');
            // se crea la array autor y se se asina la funcion getlautoresById del modelo autores_model.php linea 9
            $datos['autor'] = $this->Autores_model-> getlautoresById($id);
            
          
            
            frame($this,'autor/Actualizar_autores',$datos);
        }
        
        else{ $this->load->view('errorurl');}
    }
    
    public function actualizarpost(){
        session_start();
        //no se permte el accseo desde la url sin estar registrado
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            // cojo los datos  de el formulario    de la vista actualizar_autores.php
            // verifico que si los campos tienen datos los guarde en las variables en caso de que reciba campos vacios estos campos cojeran el valor null
            $id =  isset($_POST['id']) ? $_POST['id'] : null;
            $nombre =  isset($_POST['nombre']) ? $_POST['nombre'] : null;
          
            
            //se carga el modelo autores model
            $this->load->model('Autores_model');
           // se creaesta sesion para luego en la vista mostrar_autoresact.php se ponga del color selecionadp
            session_start();
            if($id!=null){
                $_SESSION['idcolorautor'] =$id;
            }
            //se carga la funcion actualizarautores del modelo autores_model.php linea 15 
            $this->Autores_model-> actualizarautores($id,$nombre);
            
        }
        else{ $this->load->view('errorurl');}
    }
    //cuando se pulsa "sobre la papelara" de la vista mostrarautores.php
    public function borrar(){
        session_start();
        //no se permte el accseo desde la url sin estar registrado
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            // cojo los datos  de el formulario    de la vista  mostrarautores.php.php
            // verifico que si los campos tienen datos los guarde en las variables en caso de que reciba campos vacios estos campos cojeran el valor null
            $id =  isset($_POST['id']) ? $_POST['id'] : null;
            //se carga el modelo autores_model.php
            $this->load->model('Autores_model');
            //se carga la funcion borrar del modelo autores_model.php linea 49
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
    
    
    //cuando se pulsa "iditar autores" de la vista panel_control.php (esta en la carpeta libros)
    public function mostraractualizacionautores()
    {
        //uso la seseion creada antes  lina 67  de este fichero
        session_start();
        if(isset( $_SESSION['idcolorautor'])){
            
            $_SESSION['idcolorautor'];
        }else{
            
            $_SESSION['idcolorautor']="";
            
        }
        //cuando se pulsa "sobre la papelara" de la vista mostrarautores.php
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            //se carga el modelo autores_model
            $this->load->model('Autores_model');
            //se carga el modelo libros_model
            $this->load->model('Libros_model');
            // se crea la array autores y se se asina la funcion getBo_autores(); del modelo autores_model.php linea 4
            
            $datos['autores'] = $this->Autores_model->getBo_autores();
            // se crea la array color y se se asina la sesion ala  funcion getBo_autores(); del modelo autores_model.php linea 4
            $datos['color'] = $this->Libros_model->getlibrosById($_SESSION['idcolorautor']);
         
            //se carga la vista mostrar_autoresact y se le pasan los datos
            
            frame($this,'autor/mostrar_autoresact',$datos);
            
        }
        
        else{ $this->load->view('errorurl');}
        
        
        
    }
    
   
    
}

?>