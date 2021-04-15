<?php
class union_de_tablasgenero extends CI_Model{
   
    
    public  function filtro($genero){
        
     
        
        $conexion = mysqli_connect("localhost", "root", "", "autores_y_libros");
        
        if (mysqli_connect_errno()) {
            printf("Conexion fallida: %s\n", mysqli_connect_error());
            exit();
        }
        
        $consulta= "SELECT * 
    FROM libros 
    JOIN autores ON libros.autor_id =autores.id
    WHERE `genero_literario` = '$genero'"; 
         
        $datos= mysqli_query($conexion, $consulta);
        
        if (mysqli_num_rows($datos) > 0){
            echo "<div id='tabla' align='center'>";
           
                echo"<table border=1>";
            echo"<tr>";
            echo"<th>Nombre</th><th>Titulo</th><th>Genero literario</th><th>Año edicion</th><th>Editorial</th><th>Ejemplares</th>";
            while($row = mysqli_fetch_assoc($datos)){
                echo"<tr>";
                echo "<td >";
                echo $row["nombre_autor"]."</td>";
                echo "<td>".$row["titulo"]."</td>";
                echo "<td>".$row["genero_literario"]."</td>";
                echo "<td>".$row["ano_edicion"]."</td>";
                echo "<td>".$row["editorial"]."</td>";
                echo "<td>".$row["ejemplares"]."</td>";
                
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