<?php
class Libros_model extends CI_Model{
    public function getlibrosById($id)
    {
        return R::load('libros', $id);
        
    }
    public function getBo_libros()
    {
        return R::findAll('libros',' ORDER BY titulo');
    }
    public  function filtro($genero){
        
        
        
        $conexion = mysqli_connect("localhost", "root", "", "autores_y_libros");
        
        if (mysqli_connect_errno()) {
            printf("Conexion fallida: %s\n", mysqli_connect_error());
            exit();
        }
        
        $consulta="SELECT * FROM libros WHERE genero_literario='$genero'";
        
        $datos= mysqli_query($conexion, $consulta);
        
        if (mysqli_num_rows($datos) > 0){
            echo "<div id='tabla' align='center'>";
            
            echo"<table border=1>";
            echo"<tr>";
            echo"<th>Nombre</th><th>Titulo</th><th>Genero literario</th><th>Año edicion</th><th>Editorial</th><th>Autor</th><th>Ejemplares</th>";
            while($row = mysqli_fetch_assoc($datos)){
                echo"<tr>";
                echo "<td >";
                echo $row["autor"]."</td>";
                echo "<td>".$row["titulo"]."</td>";
                echo "<td>".$row["genero_literario"]."</td>";
                echo "<td>".$row["ano_edicion"]."</td>";
                echo "<td>".$row["editorial"]."</td>";
                echo "<td>".$row["autor"]."</td>";
                echo "<td>".$row["ejemplares"]."</td>";
                
                echo "</tr>";
            }
            echo"</table>";
            echo "</div>";
            
            
        } else {
            echo "Compruebe la consulta";
        }
        
    }
    
    
    
 
    
    
    
    public function  insertarlibros($titulo,$ano,$editorial,$autor,$ejemplares,$genero_literario,$descricion,$foto)
    
    {
       session_start();
       
            $_SESSION['idcolorinsercion'] =$titulo;
        
          
        
        $libros = R::findOne('libros', 'titulo=?', [
            $titulo
        ]);
        $autores = R::findOne('autores', 'nombre_autor=?', [
            $autor
        ]);
     /*   $conexion = mysqli_connect("localhost", "root", "", "autores_y_libros");
        
        
        if (mysqli_connect_errno()) {
            printf("Conexion fallida: %s\n", mysqli_connect_error());
            exit();
        }
        
        
        $comprobar = "SELECT id FROM `autores` WHERE nombre_autor='$autor'";
        
        $resultado = mysqli_query($conexion, $comprobar);
        
        $row = mysqli_fetch_assoc($resultado);*/
     
        
       $ok = ($libros == null );
        if ($ok) {
           
          
            $libros = R::dispense('libros');
            $libros->titulo=$titulo;
            $libros->autor=$autor;   
            $libros->genero_literario=$genero_literario;
            $libros->ano_edicion=$ano;
            $libros->editorial=$editorial;
            $libros->ejemplares=$ejemplares;
            $libros->descricion=$descricion;
            $directorio = "assets/fotoslibros/".$titulo.".png";
            $existefichero = is_file( $directorio );
           
           if($foto!=null){
                
                if ( $existefichero==true ){
                    $extension="png";
                }else{
                    
                    
                    
                    
                    
                    
                    
                }}
                $libros->foto = $extension;
                 
      
            
            R::store($libros);
            if($autores->nombre_autor!=$libros->autor){
                
                $autores = R::dispense('autores');
                $autores->nombre_autor=$autor;
                
                R::store($autores);
            }
           
         
            
         
            redirect(base_url()."libro/libros/mostrar");
          
            
            
           
           
        }else{
            redirect(base_url()."/errorcamporepitidos/errorlibro");
        }
    }
    public function borrarLibros($id){
        
        R::trash(R::load('libros',$id));
        
        redirect(base_url()."libro/Libros/mostrar_libros");
        
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
    
    public function  actualizarlibros($id,$titulo,$ano,$editorial,$autor,$ejemplares,$genero_literario,$descricion,$foto)
    
    {
        
        $libros = R::findOne('libros', 'titulo=?', [
            $titulo
        ]);
    /*    $conexion = mysqli_connect("localhost", "root", "", "autores_y_libros");
        
        
        if (mysqli_connect_errno()) {
            printf("Conexion fallida: %s\n", mysqli_connect_error());
            exit();
        }
        
        
        $comprobar = "SELECT id FROM `autores` WHERE nombre_autor='$autor'";
        
        $resultado = mysqli_query($conexion, $comprobar);
        
        $row = mysqli_fetch_assoc($resultado);*/
        
        
        
        
        $libros = R::load('libros',$id);
        
        
        $libros->titulo=$titulo;
        $libros->autor=$autor;
        $libros->genero_literario=$genero_literario;
        $libros->ano_edicion=$ano;
        $libros->editorial=$editorial;
        $libros->ejemplares=$ejemplares;
        $libros->descricion=$descricion;
        $directorio = "assets/fotoslibros/".$titulo.".png";
        $existefichero = is_file( $directorio );
        
        if($foto!=null){
            
            if ( $existefichero==true ){
                $extension="png";
            }else{
                
                
                
                
                
                
                
            }}
            $libros->foto = $extension;
     
        
        
        
        R::store($libros);
        
        
        
        
        redirect(base_url()."libro/Libros/mostraractualizacion");
        
    }
        
        
        
        
        
        
     public function  reservalibros($id_usuario,$id,$cantidad,$titulo)
    
    {
        $reservado = R::findOne('reservas', 'libros_id=?', [
            $id
        ]);
        
        
        
        $ok = ($reservado == null  );
        if ($ok) {
            
            $reservas = R::dispense('reservas');
            $usuario = R::load('usuarios', $id_usuario);
            
            $libros= R::load('libros', $id);
            
            $reservas->reserva=$usuario;
            $reservas->libros=$libros;
            $reservas->fecha=date('Y-m-d');
            R::store($reservas);
            $libros->ejemplares=$cantidad-1;
            
            R::store($libros);
            
            
        }
        
        redirect(base_url()."libro/Libros/mostrarlibrosusuarios");
        
        
        
        
        
    }
    
    public function  anularreservalibros($id_usuario,$id,$cantidad,$titulo)
    {
        
        $conexion = mysqli_connect("localhost", "root", "", "autores_y_libros");
        
        if (mysqli_connect_errno()) {
            printf("Conexion fallida: %s\n", mysqli_connect_error());
            exit();
        }
        $consulta= "SELECT id FROM `reservas` WHERE `libros_id`=$id";
        
        $datos= mysqli_query($conexion, $consulta);
        $row = mysqli_fetch_assoc($datos);
        
        
        
        
        
        R::trash(R::load('reservas',$row['id']));
        
        $libros= R::load('libros', $id);
        
        $libros->ejemplares=$cantidad+1;
        
        R::store($libros);
        
        
        
        
        redirect(base_url()."libro/Libros/mostrarlibrosusuarios");
        
        
        
        
        
        
        
    }
    
    public function  mostrarboton()
    {
        
        return R::findAll('reservas');
        
        
    }
}


?>