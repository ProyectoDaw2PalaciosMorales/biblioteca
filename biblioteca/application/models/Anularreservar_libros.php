<?php
class Anularreservar_libros extends CI_Model{
    
    public function  anularreservalibros($id_usuario,$id,$cantidad,$titulo)
    {
        
        $conexion = mysqli_connect("localhost", "root", "", "autores_y_libros");
        
        if (mysqli_connect_errno()) {
            printf("Conexion fallida: %s\n", mysqli_connect_error());
            exit();
        }
        $consulta= "SELECT id FROM `reservas` WHERE `libros_id`=$id";
        
        $datos= mysqli_query($conexion, $consulta);
        $row = mysqli_fetch_assoc($datos);
        
      
        
        
   
            R::trash(R::load('reservas',$row['id']));
        
            $libros= R::load('libros', $id);
          
            $libros->ejemplares=$cantidad+1;
            
            R::store($libros);
            
            
        
        
        redirect(base_url()."libro/Mostrarlibros/mostrarusuario");
        
        
        
        
      
        
        
    }
    
    public function  mostrarboton()
    {
        
        return R::findAll('reservas');
       
            
    }
    
   
    }
    

?>