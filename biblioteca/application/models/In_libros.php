<?php
class In_libros extends CI_Model{
    
    
    
    
    public function  insertarlibros($titulo,$ano,$editorial,$autor,$ejemplares,$genero_literario)
    
    {
        session_start();
       
            $_SESSION['idcolorinsercion'] =$titulo;
      /*      $autores = R::findOne('autores', 'nombre_autor=?', [
                $autor
            ]);
          
        
        $libros = R::findOne('libros', 'titulo=?', [
            $titulo
        ]);*/
        $conexion = mysqli_connect("localhost", "root", "", "autores_y_libros");
        
        
        if (mysqli_connect_errno()) {
            printf("Conexion fallida: %s\n", mysqli_connect_error());
            exit();
        }
        
        
        $comprobar = "SELECT id FROM `autores` WHERE nombre_autor='$autor'";
        
        $resultado = mysqli_query($conexion, $comprobar);
        
        $row = mysqli_fetch_assoc($resultado);
     
        $ok = ($libros == null  );
        

      /* if ($ok){*/
           $autores = R::load('autores', $row['id']);
          
            $libros = R::dispense('libros');
            $libros->titulo=$titulo;
         //  $libros->autor=$autor;
            $libros->genero_literario=$genero_literario;
            $libros->ano_edicion=$ano;
            $libros->editorial=$editorial;
            $libros->ejemplares=$ejemplares;
            $libros->autor=$autores;        
      
            
            R::store($libros);
          
           
         
            
         
            redirect(base_url()."/Mostrarlibros/mostrar");
          
            
            
           
           
        }/*else{
            redirect(base_url()."/errorcamporepitidos/errorlibro");
        }*/
    }
    



?>