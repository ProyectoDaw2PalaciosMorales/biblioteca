<?php 
        
class Actualizarperfil extends CI_Controller {
  
    public function actualizar(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            $id =  isset($_POST['id']) ? $_POST['id'] : null;
            $this->load->model('Actu_perfil');
            
            $datos['usuario'] = $this->Actu_perfil->getusuariosById($id);
            
            
            
            
            $this->load->view(' Actualizar_perfil',$datos);
        }
            
            else{ $this->load->view('errorurl');}
    }
    
    public function actulizarperfilpost()
    {
      
        
        $id =  isset($_POST['id']) ? $_POST['id'] : null;
        $nombre =  isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $primer_apellido =  isset($_POST['primer_apellido']) ? $_POST['primer_apellido'] : null;
        $segundo_apellido =  isset($_POST['segundo_apellido']) ? $_POST['segundo_apellido'] : null;
        $ano =  isset($_POST['ano']) ? $_POST['ano'] : null;
        $mes =  isset($_POST['mes']) ? $_POST['mes'] : null;
        $dia =  isset($_POST['dia']) ? $_POST['dia'] : null;
        $fechanacimento=$ano."/".$mes."/".$dia;
        $email =  isset($_POST['email']) ? $_POST['email'] : null;
        $telefono =  isset($_POST['telefono']) ? $_POST['telefono'] : null;
        $password =  isset($_POST['password']) ? $_POST['password'] : null;
        $comprobacion =  isset($_POST['comprobacion']) ? $_POST['comprobacion'] : null;
        $alias =  isset($_POST['alias']) ? $_POST['alias'] : null;
        $foto = $_FILES['foto']['name'];
      
        $this->load->model('Actu_perfil');
        $this->load->helper('url');
        $directorio = "assets/fotosperfil/usuario-".$nombre.".png";
        unlink($directorio);
        
        $existefichero = is_file( $directorio );

        if ( $existefichero==false ) {
            $this->cargar_archivo($nombre);
           
        } else {
            
        
          
        }
           
        
        $this->Actu_perfil->actualizarperfil($id,$nombre,$primer_apellido,$segundo_apellido,$fechanacimento,$email,$telefono,$password,$comprobacion,$alias,$foto);
        
        
        }
        
        
        function cargar_archivo($nombre ) {
          
           
            
            $mi_archivo = 'foto';
           
            $config['upload_path'] = "assets/fotosperfil";
            
            $config['file_name'] ="usuario-".$nombre.".png";
            $config['allowed_types'] = 'png|gif|jpeg|jpg';
            $config['max_size'] = "50000";
            $config['max_width'] = "2000";
            $config['max_height'] = "2000";
            
            $this->load->library('upload', $config);
            
            if (!$this->upload->do_upload($mi_archivo)) {
                
                
                return;
            }


        }}
    


?>