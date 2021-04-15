<?php

class Ini_conex_bd extends CI_Model{
    
    
    
     public function verificarLogin($nombre, $password)
    {
        $conexion = mysqli_connect("localhost", "root", "", "autores_y_libros");
        
        
        if (mysqli_connect_errno()) {
            printf("Conexion fallida: %s\n", mysqli_connect_error());
            exit();
        }
        
         
        $comprobar = "SELECT alias,contrasena,id FROM usuarios WHERE alias = '$nombre' and contrasena= '$password'";
        
        $resultado = mysqli_query($conexion, $comprobar);
        
        $row = mysqli_fetch_assoc($resultado);
        session_start();
     
            $_SESSION['idperfil'] =$row["id"];
           
    
      
        
        $count = mysqli_num_rows($resultado);
       
        if ($count==0) {
            
           
           redirect(base_url()."Erroriniciosesion/error");
          
            
            
        }else{
            
            redirect(base_url()."Bienvenido/Bienvenidos_u");
            
                                  
          
                   
             
            }
            
        }
        
        
    
       
        }
      
            
           
       
    
    
    

            
            
            
                    
                    
                    
                    
                  
    
    

?>