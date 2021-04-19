<?php

class Actu_perfil extends CI_Model{
    
    public function getusuariosById($id)
    {
        return R::load('usuarios', $id);
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
                
                redirect(base_url()."usuario/Bienvenido/Bienvenidos_u");
                
                
            }
            
        }
        
      
        
        
        
        
        
        
        
    ?>