<?php

class Usuarios_model extends CI_Model{

    public function getUsuarios()
    {
        return R::findAll('usuarios',' ORDER BY nombre');
    }
    
    public function getusuaiosreservas()
    {
        return R::findAll('reservas');
    }
    
    
    public function getusuaiosById($id)
    {
        return R::load('usuarios', $id);
    }
    
    
    public function crearusuarios($nombre,$primer_apellido,$segundo_apellido,$fechanacimento,$email,$telefono,$password,$comprobacion,$alias,$foto)
    {
        $usuarios = R::findOne('usuarios', 'alias=?', [
            $alias
        ]);
        
        
        
        $ok = ($usuarios == null  );
        if ($ok) {
            
            $usuarios = R::dispense('usuarios');
            $usuarios->nombre=$nombre;
            $usuarios->primer_apellido=$primer_apellido;
            $usuarios->segundo_apellido=$segundo_apellido;
            $usuarios->fecha_nacimiento=$fechanacimento;
            $usuarios->fecha_de_registro=date('Y-m-d');
            $usuarios->email=$email;
            $usuarios->telefono=$telefono;
            $usuarios->contrasena=$password;
            $usuarios->confirmar_contrasena=$comprobacion;
            $usuarios->alias=$alias;
            $directorio = "assets/fotosperfil/usuario-".$nombre.".png";
            $existefichero = is_file( $directorio );
            
            if($foto!=null){
                
                if ( $existefichero==true ){
                    $extension="png";
                }else{
                    
                    
                    
                    
                    
                    
                    
                }}
                $usuarios->foto = $extension;
                R::store($usuarios);
                
                
                
                redirect(base_url());
                
                
        }else{
            redirect(base_url()."/errorcamporepitidos/errorusuario");
        }
        
    }
    
    public function crearadmin()
    {
        $usuarios = R::findOne('usuarios', 'alias=?', [
            "admin"
        ]);
        
        
        
        $ok = ($usuarios == null  );
        if ($ok) {
            
            $usuarios = R::dispense('usuarios');
            $usuarios->nombre="admin";
            $usuarios->primer_apellido="admin";
            $usuarios->segundo_apellido="admin";
            $usuarios-> fecha_nacimiento="1998/03/12";
            $usuarios->fecha_de_registro=date('Y-m-d');
            $usuarios->email="admin@gmail.com";
            $usuarios->telefono="6734687";
            $usuarios->contrasena="admin";
            $usuarios->confirmar_contrasena="admin";
            $usuarios->alias="admin";
            $usuarios->foto = null;
            R::store($usuarios);
            
            
            
            
        }
        
                        
                        
                        
                        
                 
        }
        
      
        
        public function verificarLogin($nombre, $password)
        {
            
            $usuario = R::findOne('usuarios', 'nombre=?', [
                $nombre
            ]);
            $a="";
            $b="";
            if ($usuario == null) {
            
               $a="no";
            }
            if ($usuario->contrasena!=$password) {
               
              $b="no";
            }
            if($a!="no"&& $b!="no"){
             
               redirect(base_url()."usuario/Usuarios/Bienvenidos_u");
                
               
              
            }
            
        }
        
        function idperfil($nombre){
         
            $usuario = R::findOne('usuarios', 'nombre=?', [
                $nombre
            ]);
            
            $_SESSION['idusuario']=$usuario;
            return   $usuario;
        }
        public function actualizarperfil($id,$nombre,$primer_apellido,$segundo_apellido,$ano,$email,$telefono,$password,$comprobacion,$alias,$foto)
        {
            
            
            $usuarios = R::load('usuarios',$id);
            
            
            $usuarios->nombre=$nombre;
            $usuarios->primer_apellido=$primer_apellido;
            $usuarios->segundo_apellido=$segundo_apellido;
            $usuarios-> fecha_nacimiento=$ano;
            $usuarios->email=$email;
            $usuarios->telefono=$telefono;
            $usuarios->contrasena=$password;
            $usuarios->confirmar_contrasena=$comprobacion;
            $usuarios->alias=$alias;
            $directorio = "assets/fotosperfil/usuario-".$nombre.".png";
            $existefichero = is_file( $directorio );
            
            
            
            if($foto!=null){
                
                if ( $existefichero==true ){
                    $extension="png";
                }else{
                    
                    
                    
                    
                    
                    
                    
                }}
                $usuarios->foto = $extension;
                R::store($usuarios);
                
                redirect(base_url()."usuario/Usuarios/Bienvenidos_u");
                
                
        }
        
      
        
        public function borrar($id){
            R::trash(R::load('usuarios',$id));
            
            redirect(base_url());
                
        }public function borraradminidtrador($id){
            R::trash(R::load('usuarios',$id));
            
            redirect(base_url()."usuario/Usuarios/mostrar");
            
        }
        
        public function  cerrarsesion()
        
        {
            
            
            //Inicia una nueva sesión o reanuda la existente
            session_start();
            
            //Destruye toda la información registrada de una sesión
            session_destroy();
            
            
            
            redirect(base_url());
            
            
            
            
            
            
            
        }
        }
        
        
     
        
        

        
        
        
        
    ?>