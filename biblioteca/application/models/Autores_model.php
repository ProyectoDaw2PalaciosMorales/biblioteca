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
    public function select_autores()
    {   $autores=[];
    $conexion = mysqli_connect("localhost", "root", "", "autores_y_libros");
    
    if (mysqli_connect_errno()) {
        printf("Conexion fallida: %s\n", mysqli_connect_error());
        exit();
    }
    $consulta= "SELECT DISTINCT(nombre_autor) FROM autores
        ";
    $datos= mysqli_query($conexion, $consulta);
    $row = mysqli_fetch_assoc($datos);
    while($row = mysqli_fetch_assoc($datos)){
        $row["nombre_autor"];
        array_push($autores, $row["nombre_autor"]);
    }
    
    return $autores;
    
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