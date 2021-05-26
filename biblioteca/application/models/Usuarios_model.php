<?php

class Usuarios_model extends CI_Model{
    // esta funcion devuelve todos los campos de la tabla usuarios ordenada alfabeticamente por el campo nombre
    public function getUsuarios()
    {
        return R::findAll('usuarios',' ORDER BY nombre');
    }
    // esta funcion devuelve todos los campos de la tabla reservas
    public function getusuaiosreservas()
    {
        return R::findAll('reservas');
    }
    
    // esta funcion devuelve todos los campos de la tabla usuarios cuyo id coincida con el que le pase el controlador
    public function getusuaiosById($id)
    {
        return R::load('usuarios', $id);
    }
    
    // recibe las variables del controlador  Usuarios.php linea 96
    public function crearusuarios($nombre,$primer_apellido,$segundo_apellido,$fechanacimento,$email,$telefono,$password,$comprobacion,$alias,$foto)
    { //busca en la tabla usuarios los campos donde el alias sea igual a admin si no encuentra nada devuelve null
        $usuarios = R::findOne('usuarios', 'alias=?', [
            $alias
        ]);
        
        
        // ok es igual a true siempre y cuando usuarios sea distinto de null
        $ok = ($usuarios == null  );
        if ($ok) {
            // crea la tabla usuarios
            $usuarios = R::dispense('usuarios');
            //crea los campos de la tabla usuarios
            $usuarios->nombre=$nombre;
            $usuarios->primer_apellido=$primer_apellido;
            $usuarios->segundo_apellido=$segundo_apellido;
            $usuarios->fecha_nacimiento=$fechanacimento;
            $usuarios->fecha_de_registro=date('Y-m-d');
            $usuarios->email=$email;
            $usuarios->telefono=$telefono;
            $usuarios->contrasena=password_hash($password, PASSWORD_DEFAULT);
            $usuarios->confirmar_contrasena=password_hash($comprobacion, PASSWORD_DEFAULT);
            $usuarios->alias=$alias;
            //verifico si las fotos exiten en el directorio assets/fotosperfil
            $sustitutuirespaciosblancos = str_replace(" ","_",$alias);
            $directorio = "assets/fotosperfil/usuario-".$sustitutuirespaciosblancos.".png";
           
            $existefichero = is_file( $directorio );
            //si la foto exite se guarda en la base de datos se guarda el campo extension como png si la foto no exite se guarda como null
            if($foto!=null){
                
                if ( $existefichero==true ){
                    $extension="png";
                }else{
                    
                    
                    
                    
                    
                    
                    
                }}
                $usuarios->foto = $extension;
                //almacena los datos en la tabla usuarios
                R::store($usuarios);
                
                
                //rdirege al controlador principal
                redirect(base_url());
                
                
        }
        
    }
   //con esta funcion se crea el usuario admin de forma automatica al cargar la aplicacion
    public function crearadmin()
    {
        //busca en la tabla usuarios los campos donde el alias sea igual a admin si no encuentra nada devuelve null
        $usuarios = R::findOne('usuarios', 'alias=?', [
            "admin"
        ]);
        
        
        // ok es igual a true siempre y cuando usuarios sea distinto de null
        $ok = ($usuarios == null  );
        if ($ok) {
            // crea la tabla usuarios
            $usuarios = R::dispense('usuarios');
            //crea los campos de la tabla usuarios
            $usuarios->nombre="admin";
            $usuarios->primer_apellido="admin";
            $usuarios->segundo_apellido="admin";
            $usuarios-> fecha_nacimiento="1998/03/12";
            $usuarios->fecha_de_registro=date('Y-m-d');
            $usuarios->email="admin@gmail.com";
            $usuarios->telefono="6734687";
            $usuarios->contrasena=password_hash("admin", PASSWORD_DEFAULT);
            $usuarios->confirmar_contrasena=password_hash("admin", PASSWORD_DEFAULT);
            $usuarios->alias="admin";
            $usuarios->foto = null;
            //almacena los datos en la tabla usuarios
            R::store($usuarios);
            
            
            
            
        }
        
                        
                        
                        
                        
                 
        }
        
      // recibe las variables nombre y password del controlador usuarios.php linea 165
        
        public function verificarLogin($nombre, $password)
        {
            //busca en la tabla usuarios los campos donde el nombre sea igual a admin si no encuentra nada devuelve null
            $usuario = R::findOne('usuarios', 'alias=?', [
                $nombre
            ]);
            $a="";
            $b="";
          echo $usuario->alias;
          echo $usuario->contrasena;
            //comprueba si la variable usuario es distinta al campo alias almacenado en la base de datos si es asi a octiene el valor="no"
            if ($usuario->alias!=$nombre) {
            
                $a="no";
            }
            //comprueba si la variable password es distinta al campo contraseña almacenado en la base de datos si es asi b octiene el valor="no"
            if (! password_verify($password, $usuario->contrasena)) {
               
             $b="no";
            }
            // si a y b de los if anteriores son no redirecciona al controlador a la carpeta usuarios dentro de esta carpeta al controlador usuarios.php linea 192
          
            if($a!="no"&& $b!="no"){
                //rdirege al controlador Usuarios/Bienvenidos_u
               redirect(base_url()."usuario/Usuarios/Bienvenidos_u");
                
              
              
            }
            else{
                session_destroy();
                // redirecciona al controlador usuario usuarios.php linea 190 dentro de la carpeta usuario
                redirect(base_url()."usuario/Usuarios/errorsesion");
            }
            
        }
        // esta funcion busca el id de un usuario 
        function idperfil($nombre){
            //busca en la tabla usuarios los campos donde el alias sea igual a lo que recibe del controlaor si no encuentra nada devuelve null
            $usuario = R::findOne('usuarios', 'alias=?', [
                $nombre
            ]);
            //guardo en una sesion la variable usuario  y se retorna esa variable al controlador Usuarios.php linea 169 dentro de la carpeta usuario
            $_SESSION['idusuario']=$usuario->id;
            return   $usuario;
        }
        // recibe las variables id,nombre,primer_apellido,segundo_apellido,ano,email,telefono,password,comprobacion,alias,foto del controlador usuarios.php linea 56
        public function actualizarperfil($id,$nombre,$primer_apellido,$segundo_apellido,$ano,$email,$telefono,$password,$comprobacion,$alias,$foto)
        {
            
            //busca en la tabla usuarios los campos donde el id  sea el que le ha pasado el controlador
            $usuarios = R::load('usuarios',$id);
            
            //sobreescribe los campos 
            $usuarios->nombre=$nombre;
            $usuarios->primer_apellido=$primer_apellido;
            $usuarios->segundo_apellido=$segundo_apellido;
            $usuarios-> fecha_nacimiento=$ano;
            $usuarios->email=$email;
            $usuarios->telefono=$telefono;
            $usuarios->contrasena=password_hash($password, PASSWORD_DEFAULT);
            $usuarios->confirmar_contrasena=password_hash($comprobacion, PASSWORD_DEFAULT);
            $usuarios->alias=$alias;
            //si la foto exite se guarda en la base de datos se guarda el campo extension como png si la foto no exite se guarda como null
            $sustitutuirespaciosblancos = str_replace(" ","_",$alias);
            $directorio = "assets/fotosperfil/usuario-".$sustitutuirespaciosblancos.".png";
            $existefichero = is_file( $directorio );
            
            
            
            if($foto!=null){
                
                if ( $existefichero==true ){
                    $extension="png";
                }else{
                    
                    
                    
                    
                    
                    
                    
                }}
                $usuarios->foto = $extension;
                // almacena los datos en la tabla usuarios de la base de datos
                R::store($usuarios);
                //rdirege al controlador Usuarios/Bienvenidos_u
                
                redirect(base_url()."usuario/Usuarios/perfil_usuario");
                
                
        }
        
      
        // recibe la variable id del controlador usuarios.php linea 204
        public function borrar($id){
            session_destroy();
            // borra todos los campos del usuario  por el id recibido del controlador
            R::trash(R::load('usuarios',$id));
            // redirige ala pagina principal
            redirect(base_url());
            // recibe la variable id del controlador usuarios.php linea 221
        }public function borraradminidtrador($id){
            // borra todos los campos del usuario  por el id recibido del controlador
          
            R::trash(R::load('usuarios',$id));
            //rdirege al controlador Usuarios/mostrar
            redirect(base_url()."usuario/Usuarios/mostrar");
            
        }
        //esta funcion borra todas las seiones
        public function  cerrarsesion()
        
        {
            
            
            //Inicia una nueva sesión o reanuda la existente
            session_start();
            
            //Destruye toda la información registrada de una sesión
            session_destroy();
            
            
            //rdirege al controlador principal
            redirect(base_url());
            
            
            
            
            
            
            
        }
        // esta funcion envia un correo con una contraseña generica y se guarda en los campos contrseña y comprobar contraseña
        public function recuperar($email)
        {
            //busca en la tabla usuarios los campos donde el email  sea el que le ha pasado el controlador
                       $usuarios = R::findOne('usuarios', 'email=?', [
                $email
            ]);
           
          
                       // ok es igual a true siempre y cuando usuarios sea distinto de null
            $ok = ($usuarios != null  );
            if ($ok) {
                //genra una contraseña aletoria
                $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                $longitudCadena=strlen($cadena);
                $pass = "";
                $longitudPass=6;
                for($i=1 ; $i<=$longitudPass ; $i++){
                    $pos=rand(0,$longitudCadena-1);
                    $pass .= substr($cadena,$pos,1);
                }
                //prepara el envio del correo
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
                $this->email->subject('Tu contraseña es');
                $this->email->message('<ul>
                              
                               <li>CONTRASEÑA:'.$pass.'</li>
                               </ul>
            ');
                
                
                $this->email->to($email);
               $this->email->send();
             //guarda la contresña que envia por correo en la tabla usuarios en los campos confirma contraña y contraseña
                $contraseña = R::load('usuarios',$usuarios->id);
                $contraseña->contrasena=password_hash($pass, PASSWORD_DEFAULT);
                $contraseña->confirmar_contrasena=password_hash($pass, PASSWORD_DEFAULT);
                R::store($contraseña);
           
                //rdirege al controlador principal
                redirect(base_url());
                
            }
                
               
            
            }
        
        
        }
        
        
     
        
        

        
        
        
        
    ?>