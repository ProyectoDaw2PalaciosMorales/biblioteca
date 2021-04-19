<?php
class Actu_autor extends CI_Model{
    
    public function getlautoresById($id)
    {
        return R::load('autores', $id);
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