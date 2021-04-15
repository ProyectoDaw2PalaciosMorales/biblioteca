<?php
class Perfilusuarios extends CI_Model{
    
    public function getusuaiosById($id)
    {
        return R::load('usuarios', $id);
    }
    
    
    
    
    public function getusuaiosreservas()
    {
        return R::findAll('reservas');
    }
    
    
    
}

?>