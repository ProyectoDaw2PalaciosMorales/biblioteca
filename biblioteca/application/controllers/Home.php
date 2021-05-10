<?php 
        
class Home extends CI_Controller {
   
    public function index()
    {
       
        //se carga el modelo  usuarios_model.php
        $this->load->model('Usuarios_model');
        // se llama ala funccion crear admin del modelo usuarios_model.php linea 74
        $this->Usuarios_model->crearadmin();
        //se carga la vista index.php
        frame($this,'index');
        
    }
   
    }




?>