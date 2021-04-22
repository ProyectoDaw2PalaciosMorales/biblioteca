<?php

class Regi_conex_BD extends CI_Model{
    
   
    
    
   
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
        
        
        
        
        
        
        }}
    ?>