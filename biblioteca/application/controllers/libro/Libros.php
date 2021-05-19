<?php 
        
class Libros extends CI_Controller {
    
    
    public function  mostrarlibrosampliacion(){
       
       
        $id =  isset($_POST['id']) ? $_POST['id'] : null;
        $this->load->model('Libros_model');
        $this->load->model('Usuarios_model');
        $datos['libro'] = $this->Libros_model->getlibrosById($id);
        $datos['usuario'] = $this->Usuarios_model->getusuaiosById($id);
     
        $this->Libros_model->anulacion($id);
        frame($this,'libro/mostrardatoslibro',$datos);
        }  
        
        // cuando se pincha sobre el boton "mostrar libros" de la vista bienvenidos.php
    public function mostrarlibrosusuarios()
    
    { 
        //se carga el modelo Libros_model
        $this->load->model('Libros_model');
       
        // se crea la array libros y se se asina la funcion getBo_libros linea 8  del modelo libros_model_model.php 
        $datos['libros'] = $this->Libros_model->getBo_libros();
        // se crea la array anulaciones y se se asina la funcion mostrarboton linea 248  del modelo libros_model_model.php 
        $datos['anulaciones'] = $this->Libros_model-> mostrarboton();
        // se carga la vista mostrar_librosusuarios.php y se le añaden los datos
        frame($this,'index',$datos);
        
    }
    
    
    
    
    // cuando se pincha sobre el boton "genero deseado" 
    public function genero(){
        
      
       
            // se carga la  vista genero deseado
            frame($this,'libro/genero_deseado');}
            
           
    
    
    public function generopost(){
        
            
            //recojo los datos  de el formulario   de la vista genero_deseado.php
           // verifico que si los campos tienen datos los guarde en las variables en caso de que reciba campos vacios estos campos cojeran el valor null
            
            $genero =  isset($_POST['genero_literario']) ? $_POST['genero_literario'] : null;
            // se carga el modelo libros_model.php
            $this->load->model('Libros_model');
            //se carga la funcion filtro 62 del modelo Libros_model
            $this->Libros_model-> filtro($genero);
        
       
    }
    // cuando se pincha sobre el boton "Administrar libros" de la vista bienvenidos.php
    public function panel_administrativo()
    {   //inicio sesion 
        session_start();
    //no se permte el accseo desde la url sin estar registrado
    if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        // se carga la vista panel_control.php
        frame($this,'libro/panel_control');}
        
        else{ $this->load->view('errorurl');}
        
    }
    // cuando se pincha sobre el boton "Administrar libros" de la vista bienvenidos.php
    public function insertarlibros(){
        //inicio sesion 
        session_start();
        //no se permte el accseo desde la url sin estar registrado
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
          
            // se carga la vista insertarlibros.php
           
            frame($this,'libro/Insertar_libros');
            
            
        }
        else{ $this->load->view('errorurl');}
    }
    
    public function insertarlibrospost(){
        //inicio sesion 
        session_start();
        //no se permte el accseo desde la url sin estar registrado
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            //recojo los datos  de el formulario   de la vista insertar_libros.php
            
            // verifico que si los campos tienen datos los guarde en las variables en caso de que reciba campos vacios estos campos cojeran el valor null
            $titulo =  isset($_POST['titulo']) ? $_POST['titulo'] : null;
            $ano =  isset($_POST['ano']) ? $_POST['ano'] : null;
            $editorial =  isset($_POST['editorial']) ? $_POST['editorial'] : null;
            $autor =  isset($_POST['autor']) ? $_POST['autor'] : null;
            $ejemplares =  isset($_POST['ejemplares']) ? $_POST['ejemplares'] : null;
            $genero_literario =  isset($_POST['genero_literario']) ? $_POST['genero_literario'] : null;
            $descricion =  isset($_POST['descricion']) ? $_POST['descricion'] : null;
            $foto = $_FILES["foto"]["name"];
            // se verifica que exite la foto en el directorio assets/fotoslibros 
            //si exiten llamo ala funcion del controlador Libros.php (este mismo) linea 267
           $directorio = "assets/fotoslibros/".$titulo.".png";
            $existefichero = is_file( $directorio );
           if ( $existefichero==false ) {
                
               $this->cargar_archivo($titulo);
            }
            //se carga el modelo Libros_model
            $this->load->model('Libros_model');
            //se carga la funcion insertarlibros 62 del modelo Libros_model
         $this->Libros_model-> insertarlibros($titulo,$ano,$editorial,$autor,$ejemplares,$genero_literario,$descricion,$foto);
           
        }
        else{ $this->load->view('errorurl');}
        
    }
    public function mostrar_libros(){
        //inicio sesion 
        session_start();
        //no se permte el accseo desde la url sin estar registrado
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            //se carga el modelo Libros_model
            $this->load->model('Libros_model');
            // se crea la array libros y se se asina la funcion getBo_libros linea 8  del modelo libros_model_model.php 
            $datos['libros'] = $this->Libros_model->getBo_libros();
            //se carga la vista mostralibrosadminitrador.php y se le pasan los datos 
            frame($this,'libro/mostrarlibrosadministrador',$datos);}
            else{ $this->load->view('errorurl');}
            
    }
    
    public function mostrar()
    
    {    //inicio sesion 
        session_start();
        //no se permte el accseo desde la url sin estar registrado
    if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        //se carga el modelo Libros_model
        $this->load->model('Libros_model');
        // se crea la array libros y se se asina la funcion getBo_libros linea 8  del modelo libros_model_model.php 
        $datos['libros'] = $this->Libros_model->getBo_libros();
        //se carga la vista mostralibrosinsercion.php y se le pasan los datos (tabla que muestra los cambios)
        frame($this,'libro/mostrar_librosinsercion',$datos);}
        
        else{ $this->load->view('errorurl');}
        
        
    }
    // cuando se pincha sobre el boton "del lapiz" de la vista mostralibrosadminitrador.php
    public function actualizar(){
        //inicio sesion 
        session_start();
        //no se permte el accseo desde la url sin estar registrado
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            //recojo los datos del campo hidden de el formulario   de la vista  mostralibrosadminitrador.php
            
            // verifico que si los campos tienen datos los guarde en las variables en caso de que reciba campos vacios estos campos cojeran el valor null
            $id =  isset($_POST['id']) ? $_POST['id'] : null;
            $this->load->model('Libros_model');
            $this->load->model('Autores_model');
            // se crea la array libro y se se asina la funcion getlibrosById linea 3  del modelo libros_model_model.php y se le añade el id
            $datos['libro'] = $this->Libros_model->getlibrosById($id);
            // se crea la array generos y se se asina la funcion getlibrosById linea 154  del modelo libros_model_model.php 
            $datos['generos'] = $this->Libros_model->getBo_categoria();
           
          
            
            //se carga la vista actualizar_libros.php
            frame($this,'libro/Actualizar_libros',$datos);}
            
            else{ $this->load->view('errorurl');}
    }
    
    public function actualizarpost(){
        //inicio sesion 
        session_start();
        //no se permte el accseo desde la url sin estar registrado
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            //recojo los datos del  el formulario   de la vista  actualizar_libros.php
            
            // verifico que si los campos tienen datos los guarde en las variables en caso de que reciba campos vacios estos campos cojeran el valor null
            $id =  isset($_POST['id']) ? $_POST['id'] : null;
            $titulo =  isset($_POST['titulo']) ? $_POST['titulo'] : null;
            $ano =  isset($_POST['ano']) ? $_POST['ano'] : null;
            $editorial =  isset($_POST['editorial']) ? $_POST['editorial'] : null;
            $autor =  isset($_POST['autor']) ? $_POST['autor'] : null;
            $ejemplares =  isset($_POST['ejemplares']) ? $_POST['ejemplares'] : null;
            $genero_literario =  isset($_POST['genero_literario']) ? $_POST['genero_literario'] : null;
            $descricion =  isset($_POST['descricion']) ? $_POST['descricion'] : null;
            $foto = $_FILES["foto"]["name"];
            // se verifica que exite la foto en el directorio assets/fotoslibros si exite borra la foto
            $directorio = "assets/fotoslibros/".$titulo.".png";
            unlink($directorio);
            // se verifica que exite la foto en el directorio assets/fotosperfil si no exite llama ala funcion cargar archivo
            $existefichero = is_file( $directorio );
            if ( $existefichero==false ) {
                
                $this->cargar_archivo($titulo);
            }
            // se carga el modelo Libros_model
           $this->load->model('Libros_model');
            
           if($id!=null){
               // esta sesion ha sido creada para ala hora de mostrar la vista  mostrarlibrosact.php se cambie el color
               // cuando se actualize y se pueda comparar con el propio titulo y en caso  de que sean igueles cambie el color
               $_SESSION['idcolor'] =$id;
           }
           // se carga la funcion actualizarlibros linea 180 del model libros_model.php
           $this->Libros_model-> actualizarlibros($id,$titulo,$ano,$editorial,$autor,$ejemplares,$genero_literario,$descricion,$foto);}
            else{ $this->load->view('errorurl');
        }
       
    }
    // cuando se pincha sobre el boton "de la basura " de la vista mostralibrosadminitrador.php
    public function borrar(){
        //inicio sesion 
        session_start();
        //no se permte el accseo desde la url sin estar registrado
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            $id =  isset($_POST['id']) ? $_POST['id'] : null;
            $titulo =  isset($_POST['titulo']) ? $_POST['titulo'] : null;
            //verifica si exite la fot en asset/fotoslibrosl si exite la borra
            if (is_file("assets/fotoslibros/".$titulo.".png" )){
                unlink("assets/fotoslibros/".$titulo.".png");}
                //se carga el modelo Libros_model
            $this->load->model('Libros_model');
            //se carga la funcion borrarlibros linea 145 del modelo libros.php y se le añade el id
            $this->Libros_model->borrarLibros($id);}
            else{ $this->load->view('errorurl');}
    }
    
    public function mostraractualizacion()
    {//inicio sesion 
        session_start();
       
        if(isset( $_SESSION['idcolor'])){
            
            $_SESSION['idcolor'];
        }else{
            
            $_SESSION['idcolor']="";
            
        }
        //no se permte el accseo desde la url sin estar registrado
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            
            
            //se carga el modelo libros_model
            $this->load->model('Libros_model');
            // se crea la array libros y se se asina la funcion getBo_libros linea 8  del modelo libros_model_model.php 
            $datos['libros'] = $this->Libros_model->getBo_libros();
            // se crea la array color y se se asina la funcion getlibrosById linea 4  del modelo libros_model_model.php  (la sesion asido creada  en la function actualizarpost linea 219 de este fichero)
            $datos['color'] = $this->Libros_model->getlibrosById($_SESSION['idcolor']);
            // se carga la vista mostrar_libroact y se le añaden los datos
            frame($this,'libro/mostrar_librosact',$datos);}
            
            else{ $this->load->view('errorurl');}
    
}

//al pulsar el boton reservar de la vista
public function reserva(){
    //inicio sesion
    session_start();
    //no se permte el accseo desde la url sin estar registrado
    if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        //recojo los datos  de el formulario   de la vista
        // verifico que si los campos tienen datos los guarde en las variables en caso de que reciba campos vacios estos campos cojeran el valor null
        $id=isset($_POST['id']) ? $_POST['id'] : null;
        $id_usuario=isset($_POST['id_usuario']) ? $_POST['id_usuario'] : null;
        $cantidad=isset($_POST['cantidad']) ? $_POST['cantidad'] : null;
        $titulo=isset($_POST['titulo']) ? $_POST['titulo'] : null;
        //se carga el modelo libros_model
        $this->load->model('Libros_model');
        // se carga la funcion reservalibros linea238 del modelolibros.php
        $this->Libros_model->reservalibros($id_usuario,$id,$cantidad,$titulo);
        
    }
    else{ $this->load->view('errorurl');}
}

public function confirmacion(){
    //inicio sesion
    session_start();
    //no se permte el accseo desde la url sin estar registrado
    if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        //recojo los datos  de el formulario   de la vista
        // verifico que si los campos tienen datos los guarde en las variables en caso de que reciba campos vacios estos campos cojeran el valor null
        $id=isset($_POST['id']) ? $_POST['id'] : null;
       
     
        //se carga el modelo libros_model
        $this->load->model('Libros_model');
        if(isset($_POST["confirmar"]))
        {
            $confimacion="si";
        }else{
            $confimacion="no";
        }
        
        // se carga la funcion confirma linea 383 del modelolibros.php
       $this->Libros_model->confirmar($id, $confimacion);
        
        
        
    }
    else{ $this->load->view('errorurl');}
}


//al pulsar el boton anular de la vista
public function anularreserva(){
    //inicio sesion
    session_start();
    //no se permte el accseo desde la url sin estar registrado
    if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        //recojo los datos  de el formulario   de la vista
        // verifico que si los campos tienen datos los guarde en las variables en caso de que reciba campos vacios estos campos cojeran el valor null
        $id=isset($_POST['id']) ? $_POST['id'] : null;
        $id_usuario=isset($_POST['id_usuario']) ? $_POST['id_usuario'] : null;
        $cantidad=isset($_POST['cantidad']) ? $_POST['cantidad'] : null;
        $titulo=isset($_POST['titulo']) ? $_POST['titulo'] : null;
        //se carga el modelo libros_model
        $this->load->model('Libros_model');
        // se carga la funcion anularreservalibros linea284 del modelolibros.php
        $this->Libros_model->anularreservalibros($id_usuario,$id,$cantidad,$titulo);
        
    }
    else{ $this->load->view('errorurl');}
}

function cargar_archivo($titulo ) {
    
    
    
    $mi_archivo = 'foto';
    
    $config['upload_path'] = "assets/fotoslibros";
    
    $config['file_name'] =$titulo.".png";
    $config['allowed_types'] = 'png|gif|jpeg|jpg';
    $config['max_size'] = "50000";
    $config['max_width'] = "2000";
    $config['max_height'] = "2000";
    
    $this->load->library('upload', $config);
    
    if (!$this->upload->do_upload($mi_archivo)) {
        
        
        return;
    }}

}
?>