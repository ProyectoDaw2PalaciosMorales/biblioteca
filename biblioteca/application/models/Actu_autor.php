<?php
class Actu_autor extends CI_Model{
    
    public function getlautoresById($id)
    {
        return R::load('autores', $id);
    }
    
    public function getBo_autores()
    {   $autores=[];
    $conexion = mysqli_connect("localhost", "root", "", "autores_y_libros");
    
    if (mysqli_connect_errno()) {
        printf("Conexion fallida: %s\n", mysqli_connect_error());
        exit();
    }
    $consulta= "SELECT DISTINCT(nombre_autor) FROM autores
        ";
    $datos= mysqli_query($conexion, $consulta);
    $row = mysqli_fetch_assoc($datos);
    while($row = mysqli_fetch_assoc($datos)){
        $row["nombre_autor"];
        array_push($autores, $row["nombre_autor"]);
    }
    
    return $autores;
    
    }
   
    public function  actualizarautores($id,$nombre,$ciudad,$fecha_nacimiento)
    
    {
      
        
        
        
    
      
            $autor = R::load('autores',$id);
           
            $autor->nombre_autor=$nombre;
            $autor->ciudad=$ciudad;
            $autor->fecha_nacimiento=$fecha_nacimiento;
            
            
            
            
            
            R::store($autor);
            
            
            
            
            
             redirect(base_url()."libro/Mostrarlibros/mostraractualizacionautores");
            
            
            
            
            
            
            
        }
    
    }
    

?>