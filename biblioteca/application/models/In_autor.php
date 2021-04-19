<?php
class In_autor extends CI_Model{
    
    
    public function getlautoresById($id)
    {
        return R::load('autores', $id);
    }
    
    
    public function getBo_autores()
    {
        return R::findAll('autores');
    }
    
    
    
    public function  insertarautor($nombre_autor,$ciudad,$fecha_naciento)
    
    {
        $_SESSION['nombre_autor'] =$nombre_autor;
        
        
        $autor = R::findOne('autores', 'nombre_autor=?', [
            $nombre_autor
        ]);
        
        
        
        $ok = ($autor == null );
        if ($ok) {
          
            $autor = R::dispense('autores');
            $autor->nombre_autor=$nombre_autor;
            $autor->ciudad=$ciudad;
            $autor->fecha_nacimiento=$fecha_naciento;
           
           
            
            R::store($autor);
          
           
         
            
           
           
            redirect(base_url()."libro/Mostrarlibros/mostrarautores");
            
            
           
           
        }else{
            redirect(base_url()."/errorcamporepitidos/errorautor");
        }
       
    }
    
}
    

?>