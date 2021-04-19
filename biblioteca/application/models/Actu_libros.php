<?php
class Actu_libros extends CI_Model{
    
    public function getlibrosById($id)
    {
        return R::load('libros', $id);
    }
    
    public function getBo_categoria()
    {   $generos=[];
        $conexion = mysqli_connect("localhost", "root", "", "autores_y_libros");
        
        if (mysqli_connect_errno()) {
            printf("Conexion fallida: %s\n", mysqli_connect_error());
            exit();
        }
        $consulta= "SELECT DISTINCT(genero_literario) FROM libros
        ";
        $datos= mysqli_query($conexion, $consulta);
        $row = mysqli_fetch_assoc($datos);
        while($row = mysqli_fetch_assoc($datos)){
           $row["genero_literario"];
           array_push($generos, $row["genero_literario"]);
        }
      
        return $generos;
        
    }
   
    public function  actualizarlibros($id,$titulo,$ano,$editorial,$autor,$ejemplares,$genero_literario)
    
    {
      
        $libros = R::findOne('libros', 'titulo=?', [
            $titulo
        ]);
        $conexion = mysqli_connect("localhost", "root", "", "autores_y_libros");
        
        
        if (mysqli_connect_errno()) {
            printf("Conexion fallida: %s\n", mysqli_connect_error());
            exit();
        }
        
        
        $comprobar = "SELECT id FROM `autores` WHERE nombre_autor='$autor'";
        
        $resultado = mysqli_query($conexion, $comprobar);
        
        $row = mysqli_fetch_assoc($resultado);
        
        
        $autores = R::load('autores', $row['id']);
      
            $libros = R::load('libros',$id);
           
            
            $libros->titulo=$titulo;
           // $libros->autor=$autor;
            $libros->genero_literario=$genero_literario;
            $libros->ano_edicion=$ano;
            $libros->editorial=$editorial;
            $libros->ejemplares=$ejemplares;
            
            $libros->autor=$autores;
            
            
            
            R::store($libros);
            
            
            
            
            redirect(base_url()."libro/Mostrarlibros/mostraractualizacion");
            
            
            
            
            
            
            
        }
    
    }
    

?>