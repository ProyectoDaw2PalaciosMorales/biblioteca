<?php
class Reservar_libros extends CI_Model{
    
    public function  reservalibros($id_usuario,$id,$cantidad,$titulo)
    
    {
        $reservado = R::findOne('reservas', 'libros_id=?', [
            $id
        ]);
        
        
        
        $ok = ($reservado == null  );
        if ($ok) {
        
        $reservas = R::dispense('reservas');
        $usuario = R::load('usuarios', $id_usuario);
        
        $libros= R::load('libros', $id);
       
        $reservas->reserva=$usuario;
        $reservas->libros=$libros;
        $reservas->fecha=date('Y-m-d');
        R::store($reservas);
        $libros->ejemplares=$cantidad-1;
        
        R::store($libros);
      
        
        }
        
        redirect(base_url()."libro/Mostrarlibros/mostrarusuario");
        
      
  
        
        
    }
    
   
    }
    

?>