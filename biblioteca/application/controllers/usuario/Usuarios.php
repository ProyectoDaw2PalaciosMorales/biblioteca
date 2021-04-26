<?php 
        
class Usuarios extends CI_Controller {
    public function perfil_usuario()
    {
        $id =  isset($_POST['id']) ? $_POST['id'] : null;
        $this->load->model('Usuarios_model');
        $datos['usuario']=$this->Usuarios_model->getusuaiosById($id);
        $datos['reservas']=$this->Usuarios_model->getusuaiosreservas();
        
        frame($this,'usuario/Perfilusuario',$datos);
        
        
    }
    
    
    public function mostrar(){
        session_start();
        
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
            $this->load->model('Usuarios_model');
            $datos['usuarios'] = $this->Usuarios_model->getUsuarios();
            frame($this,'usuario/usuarios',$datos);}
            else{ $this->load->view('errorurl');}
            
    }
  
    public function actualizar(){
    
        
        
            $id =  isset($_POST['id']) ? $_POST['id'] : null;
            $this->load->model('Usuarios_model');
            
            $datos['usuario'] = $this->Usuarios_model->getusuaiosById($id);
            
            
            
            
            frame($this,'usuario/actualizarusuario',$datos);
        }
            
            
    
    
    public function actulizarperfilpost()
    {
      
        
        $id =  isset($_POST['id']) ? $_POST['id'] : null;
        $nombre =  isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $primer_apellido =  isset($_POST['primer_apellido']) ? $_POST['primer_apellido'] : null;
        $segundo_apellido =  isset($_POST['segundo_apellido']) ? $_POST['segundo_apellido'] : null;
        $ano =  isset($_POST['ano']) ? $_POST['ano'] : null;
        
     
        $email =  isset($_POST['email']) ? $_POST['email'] : null;
        $telefono =  isset($_POST['telefono']) ? $_POST['telefono'] : null;
        $password =  isset($_POST['password']) ? $_POST['password'] : null;
        $comprobacion =  isset($_POST['comprobacion']) ? $_POST['comprobacion'] : null;
        $alias =  isset($_POST['alias']) ? $_POST['alias'] : null;
        $foto = $_FILES['foto']['name'];
      
        $this->load->model('Usuarios_model');
        $this->load->helper('url');
        $directorio = "assets/fotosperfil/usuario-".$nombre.".png";
        unlink($directorio);
        
        $existefichero = is_file( $directorio );

        if ( $existefichero==false ) {
            $this->cargar_archivo($nombre);
           
        } else {
            
        
          
        }
           
        
        $this->Usuarios_model->actualizarperfil($id,$nombre,$primer_apellido,$segundo_apellido,$ano,$email,$telefono,$password,$comprobacion,$alias,$foto);
        
        
        }
        
        public function registro()
        {
            
            
            frame($this,'usuario/registro');
            
            
            
        }
        
        public function registropost()
        {
            
            
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
            $foto = $_FILES["foto"]["name"];
            $this->load->model('Usuarios_model');
            $this->load->helper('url');
            $directorio = "assets/fotosperfil/usuario-".$nombre.".png";
            $existefichero = is_file( $directorio );
            if ( $existefichero==false ) {
                
                $this->cargar_archivo($nombre);
            }
            
            
            $this->Usuarios_model->crearusuarios($nombre,$primer_apellido,$segundo_apellido,$fechanacimento,$email,$telefono,$password,$comprobacion,$alias,$foto);
            
            $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
            $password = "";
            //Reconstruimos la contraseña segun la longitud que se quiera
            for($i=0;$i<=8;$i++) {
                //obtenemos un caracter aleatorio escogido de la cadena de caracteres
                $password .= substr($str,rand(0,62),1);
            }
            
            
            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'smtp.googlemail.com',
                'smtp_user' => 'proyectodaw2palaciosmorales@gmail.com', //Su Correo de Gmail Aqui
                'smtp_pass' => 'proyectoPaMo8', // Su Password de Gmail aqui
                'smtp_port' => '465',
                'smtp_crypto' => 'ssl',
                'mailtype' => 'html',
                'wordwrap' => TRUE,
                'charset' => 'utf-8'
            );
            
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from('proyectodaw2palaciosmorales@gmail.com');
            $this->email->subject('Bienvenido a nuestra wed');
            $this->email->message('<ul>
                               <li>USUARIO:'.$alias.'</li>
                               <li>CONTRASEÑA:'.$password.'</li>
                               </ul>
            <a href='.base_url().'>Cambiar contraseña</a>');
            
            
            $this->email->to($email);
            $this->email->send();
            
            
            
        }
        
     
        public function acceso()
        {
            $nombre =  isset($_POST['usuario']) ? $_POST['usuario'] : null;
            $password =  isset($_POST['password']) ? $_POST['password'] : null;
            session_start();
            if($nombre!=null && $password!=null){
                $_SESSION['nombre'] =$nombre;
                $_SESSION['password'] =$password;}
                
                $this->load->model('Usuarios_model');
                
             $usuario=$this->Usuarios_model->verificarLogin($_SESSION['nombre'], $_SESSION['password']);
                
       
               
                
        }
        
        
        public function Bienvenidos_u()
        {
           
            session_start();
            
           
                
                $this->load->model('Usuarios_model');
                $nombre= $_SESSION['nombre'];
               
             
                $datos['usuario'] = $this->Usuarios_model->idperfil($nombre);
                frame($this,'usuario/bienvenidos',$datos);
                
                
                
                
            }
            
            public function borrar(){
               
         
                    
                    $id =  isset($_POST['id']) ? $_POST['id'] : null;
                    $nombre =  isset($_POST['nombre']) ? $_POST['nombre'] : null;
                    if (is_file("assets/fotosperfil/usuario-".$nombre.".png" )){
                        unlink("assets/fotosperfil/usuario-".$nombre.".png");}
                    $this->load->model('Usuarios_model');
                    $this->Usuarios_model->borrar($id);
                   
            }
            
            public function borraradmin(){
                
                
                
                $id =  isset($_POST['id']) ? $_POST['id'] : null;
                $nombre =  isset($_POST['nombre']) ? $_POST['nombre'] : null;
                if (is_file("assets/fotosperfil/usuario-".$nombre.".png" )){
                    unlink("assets/fotosperfil/usuario-".$nombre.".png");}
                    $this->load->model('Usuarios_model');
                    $this->Usuarios_model->borraradminidtrador($id);
                    
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


        }
        public function cerrar()
        {
            
            
            
            $this->load->model('Usuarios_model');
            
            $this->Usuarios_model->cerrarsesion();}

}
    


?>