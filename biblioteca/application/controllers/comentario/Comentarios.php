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
    
        public function editar(){
            //inicio sesion
            session_start();
            //no se permte el accseo desde la url sin estar registrado
            if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            //recojo los datos del campo name de el formulario  oculto de la vista perfilusuario.php
            
            // verifico que si los campos tienen datos los guarde en las variables en caso de que reciba campos vacios estos campos cojeran el valor null
                $id =  isset($_POST['id_coment']) ? $_POST['id_coment'] : null;
                //se carga el modelo usuarios model
                $this->load->model('In_comentarios');
                // se crea la array usuario y se se asina la funcion getusuaiosById linea 16  del modelo usuarios_model.php ala que se le añade la variable id
                $datos['coment'] = $this->In_comentarios->getComentarioById($id);
                
                // se carga la vista actualizarusuario  y se le añaden los datos
                
                
                frame($this,'comentario/editar',$datos);
            }else{ $this->load->view('errorurl');}}
                
                
        
        
        public function editarPost()
        
        {    //inicio sesion
            session_start();
            //no se permte el accseo desde la url sin estar registrado
            if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            //recojo los datos del campo name de el formulario   de la vista actualizarusuario.php
            
            // verifico que si los campos tienen datos los guarde en las variables en caso de que reciba campos vacios estos campos cojeran el valor null
            
            $id =  isset($_POST['id_coment']) ? $_POST['id_coment'] : null;
            $comentario =  isset($_POST['comentario']) ? $_POST['comentario'] : null;
            $id_libro =  isset($_POST['id_libro']) ? $_POST['id_libro'] : null;
          // se carga el modelo usuarios_model
            $this->load->model('In_comentarios');
            
            
            
              
            $this->In_comentarios->editar($id,$comentario,$id_libro);
            
           
            }else{ $this->load->view('errorurl');}}
            // cuando se pincha sobre el boton "Si no estas resgistrado pincha aqui" de la vista index.php muestra la vista de registro.php
            public function registro()
            {
                
                
                //frame($this,'usuario/registro');
                
                $this->load->view('usuario/registro');
                
            }
            public function borrar(){
                //inicio sesion
                session_start();
                //no se permte el accseo desde la url sin estar registrado
                if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
                //recojo los datos del campo name de los input de la vista perfilusuario.php
                // verifico que si los campos tienen datos los guarde en las variables en caso de que reciba campos vacios estos campos cojeran el valor null
                    
                    $id =  isset($_POST['id_coment']) ? $_POST['id_coment'] : null;
                    $id_libro =  isset($_POST['id_libro']) ? $_POST['id_libro'] : null;
                    $this->load->model('In_comentarios');
                    // se carga la funcion borrar linea 210 del modelo_usuraio.php 
                    $this->In_comentarios->borrar($id,$id_libro);
                   
                }else{ $this->load->view('errorurl');}}    
}




?>