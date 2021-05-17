<?php
class Autores_model extends CI_Model{
    //esta funcion devuelve todos los campos de la tabla autores por el id que le ha pasado el controlador
    public function getlautoresById($id)
    {
        return R::load('autores', $id);
    }
    //esta funcion devuelve todos los campos de la tabla autores 
    public function getBo_autores()
    {
        return R::findAll('autores');
    }
    
    // recibe las variables id,nombre del controlador autores.php linea 46
    public function  actualizarautores($id,$nombre)
    
    {
        
        
        
        
        //busca en la tabla autores todos los campos y los busca por el id que recibe del controlador
        
        $autor = R::load('autores',$id);
        //anado la varaible nombre al campo nombre_autor de la tabla autores
        $autor->nombre_autor=$nombre;
       
        
        
        
        //almaceno los datos en la tabla autores de la base de datos
        
        R::store($autor);
        
        
        
        
        //redirigo al controlador autor/Autores/mostraractualizacionautores
        redirect(base_url()."autor/Autores/mostraractualizacionautores");
        
        
        
        
        
        
        
    }
    // recibe la variables id del controlador autores.php linea 67
    public function borrar($id){
        //borra todos los campos cuyo id recibe del controlador
        R::trash(R::load('autores',$id));
        //redirigo al controlador autor/Autores/mostrar_autoresadninistrador
        
        redirect(base_url()."autor/Autores/mostrar_autoresadninistrador");
        
    }
    
    // esta funcion una vez ha recibido por el campo genero del controlador autores.php linea 21
    // realiza una busqueda y genera un codigo html que mostrara esta funcion se realiza por ajax
    // esta funcion esta en head.php linea 40 dentro de la carpeta _templates
    
    public  function filtro($autor){
        //se conecta a la base de datos
        $conexion = mysqli_connect("localhost", "root", "", "autores_y_libros");
        // comprueba que todo ha ido bien
        if (mysqli_connect_errno()) {
            printf("Conexion fallida: %s\n", mysqli_connect_error());
            exit();
        }
        $consulta= "SELECT autores.*,libros.titulo FROM autores,libros
           WHERE autores.nombre_autor= libros.autor and autores.nombre_autor='$autor';
          ";
        // se forman los campos ue se usaran mas adelabte
        $datos= mysqli_query($conexion, $consulta);
        // se genera el html que se muestra
        if (mysqli_num_rows($datos) > 0){
            echo "<div id='tabla' align='center'>";
            
            echo"<table border=1>";
            echo"<tr>";
            echo"<th>Nombre Autor</th><th>Titulo</th>";
            while($row = mysqli_fetch_assoc($datos)){
                echo"<tr>";
                echo "<td >";
                echo $row["nombre_autor"]."</td>";
                
               
                
                echo "<td>".$row["titulo"]."</td>";
                
                echo "</tr>";
            }
            echo"</table>";
            echo "</div>";
            
            
        } else {
            echo "Compruebe la consulta";
        }
        
    
    }


}


?>