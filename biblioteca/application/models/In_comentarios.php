<?php
class In_comentarios extends CI_Model{
    
  
   
    public function  escribircomentario($id,$comentarios,$id_libro)
    
    {
        $comentario = R::dispense('comentarios');
        $usuario = R::load('usuarios', $id);
        $libros = R::load('libros', $id_libro);
        $comentario->comentario=$comentarios;
        $comentario->usuario=$usuario;
        $comentario->libros=$libros;
        $comentario->fecha=date('Y-m-d');;
        R::store($comentario);
        $this->load->model('Libros_model');
        $this->load->model('Usuarios_model');
        $this->load->model('In_comentarios');
        $datos['libro'] = $this->Libros_model->getlibrosById($id_libro);
        $datos['usuarios'] = $this->Usuarios_model->getUsuarios();
        $datos['comentarios']=$this->In_comentarios-> findByIdLibro();
        $this->Libros_model->anulacion($id);
        frame($this,'libro/mostrardatoslibro',$datos);
            
        
            
        }
    public function findByIdLibro(){
       return R::findAll('comentarios');
        
        
    }
  

}
    
    

?>