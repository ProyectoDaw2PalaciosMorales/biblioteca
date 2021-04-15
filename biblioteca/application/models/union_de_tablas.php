<?php
class union_de_tablas extends CI_Model{
   
    
    public  function filtro($autor){
        
        $conexion = mysqli_connect("localhost", "root", "", "autores_y_libros");
        
        if (mysqli_connect_errno()) {
            printf("Conexion fallida: %s\n", mysqli_connect_error());
            exit();
        }
        $consulta= "SELECT * 
    FROM libros 
    JOIN autores ON libros.autor_id =autores.id
    WHERE `nombre_autor` = '$autor'
          "; 
        $datos= mysqli_query($conexion, $consulta);
        
        if (mysqli_num_rows($datos) > 0){
            echo "<div id='tabla' align='center'>";
            
            echo"<table border=1>";
            echo"<tr>";
            echo"<th>Nombre Autor</th><th>Ciudad</th><th>Fecha de Nacimiento</th><th>Titulo</th>";
            while($row = mysqli_fetch_assoc($datos)){
                echo"<tr>";
                echo "<td >";
                echo $row["nombre_autor"]."</td>";
                
                echo "<td>".$row["ciudad"]."</td>";
                
                echo "<td>".$row["fecha_nacimiento"]."</td>";
                
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