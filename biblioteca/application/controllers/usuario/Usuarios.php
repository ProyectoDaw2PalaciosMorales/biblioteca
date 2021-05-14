<?php 
        
class Usuarios extends CI_Controller {
    
    // cuando se pincha sobre el boton "perfil dentro de la imagen del la barra de navegacion" de la vista nav dentro de la carpeta _templates
    public function perfil_usuario(){
         
           //inicio sesion
           session_start();
        //no se permte el accseo desde la url sin estar registrado
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        //recojo los datos del campo name de el formulario  oculto de la vista bienvenidos.php
        
        // verifico que si los campos tienen datos los guarde en las variables en caso de que reciba campos vacios estos campos cojeran el valor null
        $id =  isset($_POST['id']) ? $_POST['id'] : null;
        //se carga el modelo usuario_model
        $this->load->model('Usuarios_model');
        // se crea la array usuario y se se asina la funcion getusuaiosById linea 16  del modelo usuarios_model.php ala que se le añade la variable id
        $datos['usuario']=$this->Usuarios_model->getusuaiosById($id);
        // se crea la array reservas y se se asina la funcion getusuaiosreserva linea 10  del modelo usuarios_model.php 
        $datos['reservas']=$this->Usuarios_model->getusuaiosreservas();
        // se carga la vista perfil usuario y se le añaden los datos
        frame($this,'usuario/Perfilusuario',$datos);
        
        
        }  else{ $this->load->view('errorurl');}}
    
    // cuando se pincha sobre el boton "mostrar usuarios " de la vista bienvenidos.php
    public function mostrar(){
        //inicio sesion
        session_start();
        //no se permte el accseo desde la url sin estar registrado
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        
        
            //se carga el modelo usuarios model
            $this->load->model('Usuarios_model');
            // se crea la array usuario y se se asina la funcion getUsuarios linea 5  del modelo usuarios_model.php ala que se le añade la variable id
            $datos['usuarios'] = $this->Usuarios_model->getUsuarios();
            // se carga la vista  usuarios y se le añaden los datos
            frame($this,'usuario/usuarios',$datos);
            
            
        }else{ $this->load->view('errorurl');}}
        
    // cuando se pincha sobre el boton "modifar tus datos" de la vista perfilusuario.php 
    public function actualizar(){
        //inicio sesion
        session_start();
        //no se permte el accseo desde la url sin estar registrado
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        //recojo los datos del campo name de el formulario  oculto de la vista perfilusuario.php
        
        // verifico que si los campos tienen datos los guarde en las variables en caso de que reciba campos vacios estos campos cojeran el valor null
            $id =  isset($_POST['id']) ? $_POST['id'] : null;
            //se carga el modelo usuarios model
            $this->load->model('Usuarios_model');
            // se crea la array usuario y se se asina la funcion getusuaiosById linea 16  del modelo usuarios_model.php ala que se le añade la variable id
            $datos['usuario'] = $this->Usuarios_model->getusuaiosById($id);
            
            // se carga la vista actualizarusuario  y se le añaden los datos
            
            
            frame($this,'usuario/actualizarusuario',$datos);
        }else{ $this->load->view('errorurl');}}
            
            
    
    
    public function actulizarperfilpost()
    
    {    //inicio sesion
        session_start();
        //no se permte el accseo desde la url sin estar registrado
        if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
        //recojo los datos del campo name de el formulario   de la vista actualizarusuario.php
        
        // verifico que si los campos tienen datos los guarde en las variables en caso de que reciba campos vacios estos campos cojeran el valor null
        
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
      // se carga el modelo usuarios_model
        $this->load->model('Usuarios_model');
        // se carga el helper
        $this->load->helper('url');
        // se verifica que exite la foto en el directorio assets/fotosperfil si exite borra la foto
        $directorio = "assets/fotosperfil/usuario-".$nombre.".png";
        unlink($directorio);
        // se verifica que exite la foto en el directorio assets/fotosperfil si no exite llama ala funcion cargar archivo
        $existefichero = is_file( $directorio );

        if ( $existefichero==false ) {
            $this->cargar_archivo($nombre);
           
        } else {
            
        
          
        }
           //se carga la funccion actualizarperfil linea 163 del modelo usuarios_model.php
        
        $this->Usuarios_model->actualizarperfil($id,$nombre,$primer_apellido,$segundo_apellido,$ano,$email,$telefono,$password,$comprobacion,$alias,$foto);
        
        
        }else{ $this->load->view('errorurl');}}
        // cuando se pincha sobre el boton "Si no estas resgistrado pincha aqui" de la vista index.php muestra la vista de registro.php
        public function registro()
        {
            
            
            //frame($this,'usuario/registro');
            
            $this->load->view('usuario/registro');
            
        }
        
        public function registropost()
        {
            //recojo los datos del campo name de los input de la vista registro.php
            // verifico que si los campos tienen datos los guarde en las variables en caso de que reciba campos vacios estos campos cojeran el valor null
            
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
            //se carga el modelo usuarios_model
            $this->load->model('Usuarios_model');
            // se carga el helper url
            $this->load->helper('url');
            //verifico si las fotos exiten en el directorio assets/fotosperfil
            //si exiten llamo ala funcion del controlador Usuarios.php (este mismo) linea 250
            $directorio = "assets/fotosperfil/usuario-".$nombre.".png";
            $existefichero = is_file( $directorio );
            if ( $existefichero==false ) {
                
                $this->cargar_archivo($nombre);
            }
            
            //se carga la funcion crearusuarios del modelo Usuarios_model.php linea  22 y se le pasa todas las variabes
            $this->Usuarios_model->crearusuarios($nombre,$primer_apellido,$segundo_apellido,$fechanacimento,$email,$telefono,$password,$comprobacion,$alias,$foto);
            
         
            
            
        // cuando se pincha sobre el boton "login dentro de la imagen del la barra de navegacion" de la vista nav dentro de la carpeta _templates
        } public function accesoget()
        {
            /*frame($this,'usuario/login');*/
            
            $this->load->view('usuario/login');
            
        }
        
     //esta funcion verifica el accesso de un usuario registrado desde la vista index.php
        public function acceso()
        {
            //recojo los datos del campo name de los input de la vista index.php
      // verifico que si los campos tienen datos los guarde en las variables en caso de que reciba campos vacios estos campos cojeran el valor null
            
            $nombre =  isset($_POST['usuario']) ? $_POST['usuario'] : null;
            $password =  isset($_POST['password']) ? $_POST['password'] : null;
            
            session_start();
            // se inicia una sesion en la que se almacena el nombre y el password de las variables nombre y password si son distintas de null en caso
            // de que no sean distintas coje el valor de las variables nombre y password
            
            if($nombre!=null && $password!=null){
                $_SESSION['nombre'] =$nombre;
                $_SESSION['password'] =$password;}
             //se carga el modelo usuarios_model   
                $this->load->model('Usuarios_model');
              //se carga la funcion del modelo verificarlogin del modelo usuarios_model linea 116
              // y se le pasa la sesiones de nombre y password como parametros
             $this->Usuarios_model->verificarLogin($_SESSION['nombre'], $_SESSION['password']);
                
       
               
                
        }
        //esta funccion muestra un menseje de aviso de que alguno dato se metio mal en en el login
        public  function errorsesion(){
            frame($this,'errorriniciosesion');
            
        }
        
        // esta funcion se muestra si los datos del login son correctos
        public function Bienvenidos_u()
        {//no se permte el accseo desde la url sin estar registrado
            //inicio sesion
            session_start();
            if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
                    
           
                // se carga el modelo usuarios_model
                $this->load->model('Usuarios_model');
                //se asigna la sesion nombre a la variable nombre
                $nombre= $_SESSION['nombre'];
               
              // se crea la array usuario y se se asina la funcion idperfil linea 154  del modelo usuarios_model.php ala que se le añade la variable nombre
                $datos['usuario'] = $this->Usuarios_model->idperfil($nombre);
                // se carga la vista bienvenidos y se le añaden la array datos
                frame($this,'usuario/bienvenidos',$datos);         
              
               
                
            }else{ $this->load->view('errorurl');}}
            
            // cuando se pincha sobre el boton "eliminar tu cuenta" de la vista perfilusuario.php 
            public function borrar(){
                //inicio sesion
                session_start();
                //no se permte el accseo desde la url sin estar registrado
                if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
                //recojo los datos del campo name de los input de la vista perfilusuario.php
                // verifico que si los campos tienen datos los guarde en las variables en caso de que reciba campos vacios estos campos cojeran el valor null
                    
                    $id =  isset($_POST['id']) ? $_POST['id'] : null;
                    $nombre =  isset($_POST['nombre']) ? $_POST['nombre'] : null;
                    //verifica si la foto exite si exite borrar la imagen del directorio assets/fotosperfil
                    if (is_file("assets/fotosperfil/usuario-".$nombre.".png" )){
                        unlink("assets/fotosperfil/usuario-".$nombre.".png");}
                        //se carga el modelo 
                    $this->load->model('Usuarios_model');
                    // se carga la funcion borrar linea 210 del modelo_usuraio.php 
                    $this->Usuarios_model->borrar($id);
                   
                }else{ $this->load->view('errorurl');}}
                
            // cuando se pincha sobre el boton "de la papelera" de la vista usuarios.php
            public function borraradmin(){
                //inicio sesion
                session_start();
                //no se permte el accseo desde la url sin estar registrado
                if(isset( $_SESSION['nombre']) &&  $_SESSION['password']){
                //recojo los datos del campo name de los input de la vista usuarios.php
                // verifico que si los campos tienen datos los guarde en las variables en caso de que reciba campos vacios estos campos cojeran el valor null
                
                
                $id =  isset($_POST['id']) ? $_POST['id'] : null;
                $nombre =  isset($_POST['nombre']) ? $_POST['nombre'] : null;
              //verifica si exite la fot en asset/fotosperfil si exite la borra
                if (is_file("assets/fotosperfil/usuario-".$nombre.".png" )){
                    unlink("assets/fotosperfil/usuario-".$nombre.".png");}
                    //se carga el modelo 
                    $this->load->model('Usuarios_model');
                    // se carga la funcion borraradminidtrador linea 216 del modelo_usuraio.php 
                    $this->Usuarios_model->borraradminidtrador($id);
                    
                }else{ $this->load->view('errorurl');}}
            
        
        
        
        function cargar_archivo($nombre ) {
          
           
            //nombre de la foto
            $mi_archivo = 'foto';
           //ruta de la foto
            $config['upload_path'] = "assets/fotosperfil";
            //nombre final de la foto
            $config['file_name'] ="usuario-".$nombre.".png";
            //formato de la foto
            $config['allowed_types'] = 'png|gif|jpeg|jpg';
            //tamaños maximos permitidos
            $config['max_size'] = "50000";
            $config['max_width'] = "2000";
            $config['max_height'] = "2000";
            //se carga la libreria upload de redbeans
            $this->load->library('upload', $config);
            
            if (!$this->upload->do_upload($mi_archivo)) {
                
                
                return;
            }


        }
        // cuando se pincha sobre el boton "cerrar dentro de la imagen del la barra de navegacion" de la vista nav dentro de la carpeta _templates
        public function cerrar()
        {
            
            
            //se carga el modelo 
            $this->load->model('Usuarios_model');
            // se carga la funcion cerrarsesion linea 223 del modelo_usuraio.php 
            $this->Usuarios_model->cerrarsesion();}
           
            

        }
    


?>