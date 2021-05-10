<?php 
        
class Libros extends CI_Controller {
    
    
    public function  mostrarlibrosampliacion(){
        $id =  isset($_POST['id']) ? $_POST['id'] : null;
        $this->load->model('Libros_model');
        $datos['libro'] = $this->Libros_model->getlibrosById($id);
        frame($this,'libro/mostrardatoslibro',$datos);
    }
    public function mostrarlibrosusuarios()
    { session_start();
    
    if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        $this->load->model('Libros_model');
        $this->load->model('Autores_model');
        
        $datos['libros'] = $this->Libros_model->getBo_libros();
        $datos['autores'] = $this->Autores_model->getBo_autores();
        $datos['anulaciones'] = $this->Libros_model-> mostrarboton();
        
        frame($this,'libro/mostrar_librosusuarios',$datos);
        
    }
    
    else{ $this->load->view('errorurl');}
    
    }
    public function genero(){
        
        
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            
            frame($this,'libro/genero_deseado');}
            
            else{ $this->load->view('errorurl');}
    }
    
    public function generopost(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            
            
            
            $genero =  isset($_POST['genero_literario']) ? $_POST['genero_literario'] : null;
            $this->load->model('Libros_model');
            $this->Libros_model-> filtro($genero);
        }
        else{ $this->load->view('errorurl');}
    }
  
    public function panel_administrativo()
    {    session_start();
    
    if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        frame($this,'libro/panel_control');}
        
        else{ $this->load->view('errorurl');}
        
    }
   
    public function insertarlibros(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
          
            $this->load->model('Autores_model');
           
            frame($this,'libro/Insertar_libros');
            
            
        }
        else{ $this->load->view('errorurl');}
    }
    
    public function insertarlibrospost(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
           
            $titulo =  isset($_POST['titulo']) ? $_POST['titulo'] : null;
            $ano =  isset($_POST['ano']) ? $_POST['ano'] : null;
            $editorial =  isset($_POST['editorial']) ? $_POST['editorial'] : null;
            $autor =  isset($_POST['autor']) ? $_POST['autor'] : null;
            $ejemplares =  isset($_POST['ejemplares']) ? $_POST['ejemplares'] : null;
            $genero_literario =  isset($_POST['genero_literario']) ? $_POST['genero_literario'] : null;
            $descricion =  isset($_POST['descricion']) ? $_POST['descricion'] : null;
            $foto = $_FILES["foto"]["name"];
           
           $directorio = "assets/fotoslibros/".$titulo.".png";
            $existefichero = is_file( $directorio );
           if ( $existefichero==false ) {
                
               $this->cargar_archivo($titulo);
            }
            
            $this->load->model('Libros_model');
         $this->Libros_model-> insertarlibros($titulo,$ano,$editorial,$autor,$ejemplares,$genero_literario,$descricion,$foto);
           
        }
        else{ $this->load->view('errorurl');}
        
    }
    public function mostrar_libros(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            $this->load->model('Libros_model');
            
            $datos['libros'] = $this->Libros_model->getBo_libros();
            frame($this,'libro/mostrarlibrosadministrador',$datos);}
            else{ $this->load->view('errorurl');}
            
    }
    
    public function mostrar()
    {    session_start();
    
    if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        $this->load->model('Libros_model');
        
        $datos['libros'] = $this->Libros_model->getBo_libros();
        
        frame($this,'libro/mostrar_librosinsercion',$datos);}
        
        else{ $this->load->view('errorurl');}
        
        
    }
    
    public function actualizar(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            $id =  isset($_POST['id']) ? $_POST['id'] : null;
            $this->load->model('Libros_model');
            $this->load->model('Autores_model');
            $datos['libro'] = $this->Libros_model->getlibrosById($id);
            $datos['generos'] = $this->Libros_model->getBo_categoria();
           
          
            
            
            frame($this,'libro/Actualizar_libros',$datos);}
            
            else{ $this->load->view('errorurl');}
    }
    
    public function actualizarpost(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            
            $id =  isset($_POST['id']) ? $_POST['id'] : null;
            $titulo =  isset($_POST['titulo']) ? $_POST['titulo'] : null;
            $ano =  isset($_POST['ano']) ? $_POST['ano'] : null;
            $editorial =  isset($_POST['editorial']) ? $_POST['editorial'] : null;
            $autor =  isset($_POST['autor']) ? $_POST['autor'] : null;
            $ejemplares =  isset($_POST['ejemplares']) ? $_POST['ejemplares'] : null;
            $genero_literario =  isset($_POST['genero_literario']) ? $_POST['genero_literario'] : null;
            $descricion =  isset($_POST['descricion']) ? $_POST['descricion'] : null;
            $foto = $_FILES["foto"]["name"];
            $directorio = "assets/fotoslibros/".$titulo.".png";
            unlink($directorio);
            $existefichero = is_file( $directorio );
            if ( $existefichero==false ) {
                
                $this->cargar_archivo($titulo);
            }
            
           $this->load->model('Libros_model');
            
           if($id!=null){
               $_SESSION['idcolor'] =$id;
           }
           $this->Libros_model-> actualizarlibros($id,$titulo,$ano,$editorial,$autor,$ejemplares,$genero_literario,$descricion,$foto);}
            else{ $this->load->view('errorurl');
        }
       
    }
    
    public function borrar(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            $id =  isset($_POST['id']) ? $_POST['id'] : null;
            $titulo =  isset($_POST['titulo']) ? $_POST['titulo'] : null;
            if (is_file("assets/fotoslibros/".$titulo.".png" )){
                unlink("assets/fotoslibros/".$titulo.".png");}
            $this->load->model('Libros_model');
            $this->Libros_model->borrarLibros($id);}
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
            
            
            
            $this->load->model('Libros_model');
            $datos['libros'] = $this->Libros_model->getBo_libros();
            
            $datos['color'] = $this->Libros_model->getlibrosById($_SESSION['idcolor']);
            frame($this,'libro/mostrar_librosact',$datos);}
            
            else{ $this->load->view('errorurl');}
    
}


public function reserva(){
    session_start();
    
    if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        $id=isset($_POST['id']) ? $_POST['id'] : null;
        $id_usuario=isset($_POST['id_usuario']) ? $_POST['id_usuario'] : null;
        $cantidad=isset($_POST['cantidad']) ? $_POST['cantidad'] : null;
        $titulo=isset($_POST['titulo']) ? $_POST['titulo'] : null;
        $this->load->model('Libros_model');
        
        $this->Libros_model->reservalibros($id_usuario,$id,$cantidad,$titulo);
        
    }
    else{ $this->load->view('errorurl');}
}
public function anularreserva(){
    session_start();
    
    if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        $id=isset($_POST['id']) ? $_POST['id'] : null;
        $id_usuario=isset($_POST['id_usuario']) ? $_POST['id_usuario'] : null;
        $cantidad=isset($_POST['cantidad']) ? $_POST['cantidad'] : null;
        $titulo=isset($_POST['titulo']) ? $_POST['titulo'] : null;
        $this->load->model('Libros_model');
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