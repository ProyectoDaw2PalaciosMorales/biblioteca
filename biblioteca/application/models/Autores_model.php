<?php
class Autores_model extends CI_Model{
    
    public function getlautoresById($id)
    {
        return R::load('autores', $id);
    }
    public function getBo_autores()
    {
        return R::findAll('autores');
    }
    
    
    public function  actualizarautores($id,$nombre,$ciudad,$fecha_nacimiento)
    
    {
        
        
        
        
        
        
        $autor = R::load('autores',$id);
        
        $autor->nombre_autor=$nombre;
        $autor->ciudad=$ciudad;
        $autor->fecha_nacimiento=$fecha_nacimiento;
        
        
        
        
        
        R::store($autor);
        
        
        
        
        
        redirect(base_url()."autor/Autores/mostraractualizacionautores");
        
        
        
        
        
        
        
    }
    
    public function borrar($id){
        
        R::trash(R::load('autores',$id));
        
        redirect(base_url()."autor/Autores/mostrar_autoresadninistrador");
        
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
            
            
            
            
            
            
            redirect(base_url()."autor/Autores/mostrarautores");
            
            
            
            
        }else{
            redirect(base_url()."/errorcamporepitidos/errorautor");
        }
        
    }
    
    public  function filtro($autor){
        
        $conexion = mysqli_connect("localhost", "root", "", "autores_y_libros");
        
        if (mysqli_connect_errno()) {
            printf("Conexion fallida: %s\n", mysqli_connect_error());
            exit();
        }
        $consulta= "SELECT autores.*,libros.titulo FROM autores,libros
           WHERE autores.nombre_autor= libros.autor and autores.nombre_autor='$autor';
          ";
        $datos= mysqli_query($conexion, $consulta);
        
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