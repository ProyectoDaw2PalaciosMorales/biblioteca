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
        $comentario->fecha=  new DateTime('NOW');
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
    public function getComentarioById($id)
    {
        return R::load('comentarios', $id);
    }
  
    public function borrar($id){
        //borra todos los campos cuyo id recibe del controlador
        R::trash(R::load('comentarios',$id));
        //redirigo al controlador autor/Autores/mostrar_autoresadninistrador
        
        redirect(base_url());
        
    }
    public function  editar($id,$comentario)
    
    {
        //busca en la tabla autores todos los campos y los busca por el id que recibe del controlador
        
        $coment = R::load('comentarios',$id);
        //anado la varaible nombre al campo nombre_autor de la tabla autores
        $coment->comentario=$comentario;
        $coment->fecha=  new DateTime('NOW');
        //almaceno los datos en la tabla autores de la base de datos
        
        R::store($coment);
        
        //redirigo al controlador autor/Autores/mostraractualizacionautores
        redirect(base_url());
        
    }  
    

}
    
    

?>