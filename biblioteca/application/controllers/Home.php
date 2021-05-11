<?php 
        
class Home extends CI_Controller {
   
    public function index()
    {
       
        //se carga el modelo  usuarios_model.php
        $this->load->model('Usuarios_model');
        //se carga el modelo  libros_model.php
        $this->load->model('Libros_model');
        // se llama ala funccion crear admin del modelo usuarios_model.php linea 74
        $this->Usuarios_model->crearadmin();
        //se carga la vista index.php
                // se crea la array libros y se se asina la funcion getBo_libros linea 8  del modelo libros_model_model.php
        $datos['libros'] = $this->Libros_model->getBo_libros();
        frame($this,'index',$datos);
        
    }
   
    }




?>