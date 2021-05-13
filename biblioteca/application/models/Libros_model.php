<?php
class Libros_model extends CI_Model{
    //esta funcion recoje todos los datos dela tabla libro cuyo id es el que le pasa el controlador
    public function getlibrosById($id)
    {
        return R::load('libros', $id);
        
    }
    //esta funcion recoje todos los campos de la tabla libros de la base de datos y lo ordena por el campo titulo
    public function getBo_libros()
    {
        return R::findAll('libros',' ORDER BY titulo');
    }
    // esta funcion una vez ha recibido por el campo genero del controlador libros.php linea 52
    // realiza una busqueda y genera un codigo html que mostrara esta funcion se realiza por ajax 
    // esta funcion esta en head.php linea 40 dentro de la carpeta _templates
    public  function filtro($genero){
        
        
        //se conecta a la base de datos
        $conexion = mysqli_connect("localhost", "root", "", "autores_y_libros");
        // comprueba que todo ha ido bien
        if (mysqli_connect_errno()) {
            printf("Conexion fallida: %s\n", mysqli_connect_error());
            exit();
        }
        // recupero todos los datos de la tabla libros con un flitro de genero
        $consulta="SELECT * FROM libros WHERE genero_literario='$genero'";
        // se forman los campos ue se usaran mas adelabte
        $datos= mysqli_query($conexion, $consulta);
        // se genera el html que se muestra
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
    
    
    
 
    
    
    //recibe las variables del controlador  libros.php linea 97
    public function  insertarlibros($titulo,$ano,$editorial,$autor,$ejemplares,$genero_literario,$descricion,$foto)
    
    {
          // esta sesion ha sido creada para ala hora de mostrar la vista  mostrarlibrosinsercion.php se cambie el color
          // cuando se inserte y se pueda comparar con el propio titulo y en caso  de que sean igueles cambie el color
       
            $_SESSION['idcolorinsercion'] =$titulo;
        
          
            ////busca en la tabla libros los campos donde el titulo sea igual al campo que reciba del controlador  si no encuentra nada devuelve null
        $libros = R::findOne('libros', 'titulo=?', [
            $titulo
        ]);
        ////busca en la tabla autores los campos donde el autor sea igual al campo que reciba del controlador  si no encuentra nada devuelve null
        $autores = R::findOne('autores', 'nombre_autor=?', [
            $autor
        ]);
   
        // ok es igual a true siempre y cuando libros sea distinto de null
        
       $ok = ($libros == null );
        if ($ok) {
           
          // se crea la tabla libros
            $libros = R::dispense('libros');
            //se crean los campos de la tabla libros
            $libros->titulo=$titulo;
            $libros->autor=$autor;   
            $libros->genero_literario=$genero_literario;
            $libros->ano_edicion=$ano;
            $libros->editorial=$editorial;
            $libros->ejemplares=$ejemplares;
            $libros->descricion=$descricion;
            //verifico si las fotos exiten en el directorio assets/fotoslibros
            $sustitutuirespaciosblancos = str_replace(" ","_",$titulo);
            $directorio = "assets/fotoslibros/".$sustitutuirespaciosblancos.".png";
           
            $existefichero = is_file( $directorio );
            //si la foto exite se guarda en la base de datos se guarda el campo extension como png si la foto no exite se guarda como null
           if($foto!=null){
                
                if ( $existefichero==true ){
                    $extension="png";
                }else{
                    
                    
                    
                    
                    
                    
                    
                }}
                $libros->foto = $extension;
                 
      
            // se almacenan los datos en la tabla libros de la base de datos
            R::store($libros);
            //si el autor  no exite en la tabla autor autor en caso de exita no hace nada
            if($autores->nombre_autor!=$libros->autor){
                // se crea la tabla autores
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
   
    //esta funcion recoje todos los campos genero_literario de la tabla libros 
    // y los añade a una array para luego poder usarlo en el controlador libros.php
    public function getBo_categoria()
    
    { 
        //se crea una array vacia
        $generos=[];
        // me conecto ala base de datos 
    $conexion = mysqli_connect("localhost", "root", "", "autores_y_libros");
    // verifico que todo ha ido bien
    if (mysqli_connect_errno()) {
        printf("Conexion fallida: %s\n", mysqli_connect_error());
        exit();
    }
    //busco en la tabla libros todos los generos_literaios y los recojo pero en este caso se descartar los campos repetidos
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
    //recibe las variables del controlador  libros.php linea 97
    public function  actualizarlibros($id,$titulo,$ano,$editorial,$autor,$ejemplares,$genero_literario,$descricion,$foto)
    
    {
        //busca en la tabla libros los campos donde el titulo sea igual al campo que reciba del controlador  si no encuentra nada devuelve null
        $libros = R::findOne('libros', 'titulo=?', [
            $titulo
        ]);
   
        
        
        
        // coje los campos de la tabla libros cuyo id es que le pasa el controlador
        $libros = R::load('libros',$id);
        //sobreescribe los campos de la tabla libros
        $libros->titulo=$titulo;
        $libros->autor=$autor;
        $libros->genero_literario=$genero_literario;
        $libros->ano_edicion=$ano;
        $libros->editorial=$editorial;
        $libros->ejemplares=$ejemplares;
        $libros->descricion=$descricion;
        //verifico si las fotos exiten en el directorio assets/fotoslibros
        $sustitutuirespaciosblancos = str_replace(" ","_",$titulo);
        $directorio = "assets/fotoslibros/".$sustitutuirespaciosblancos.".png";
        
        $existefichero = is_file( $directorio );
        //si la foto exite se guarda en la base de datos se guarda el campo extension como png si la foto no exite se guarda como null
        if($foto!=null){
            
            if ( $existefichero==true ){
                $extension="png";
            }else{
                
                
                
                
                
                
                
            }}
            $libros->foto = $extension;
     
        
        
        //almaceno lo datos en la tabla libros
        R::store($libros);
        
        
        
        
        redirect(base_url()."libro/Libros/mostraractualizacion");
        
    }
        
        
        
        
     // recibe las variables del controlador libros.php linea 275   
      // esta funcion lo que hace es qeu cuando se pulse sobre el boton
      // reste una unidad a los ejempleres del libro
      // y crea una nueva tabla llamada reservas
     public function  reservalibros($id_usuario,$id,$cantidad,$titulo)
    
    {  // busca todos los campos de la tabla reservas por el campo libros_id cuyo id es el que recibe del controlador
        $reservado = R::findOne('reservas', 'libros_id=?', [
            $id
        ]);
        
        // ok es igual a true siempre y cuando reservas sea distinto de null
   
        $ok = ($reservado == null  );
        if ($ok) {
            //creo la tabla reservas
            $reservas = R::dispense('reservas');
            //busco el id del usuario para luego poder relacionarlo
            $usuario = R::load('usuarios', $id_usuario);
            //busco el id del libro para luego poder relacionarlo
              $libros= R::load('libros', $id);
            // creo un campo en el que se relaciona el id de usario con la tabla reservas
            $reservas->reserva=$usuario;
            //creo un campo en el que se relaciona el id de libro con la tabla reservas
            $reservas->libros=$libros;
         // recoje la fecha del sistema
            $reservas->fecha=date('Y-m-d');
            //almaceno los datos en la tabla reservas de la base de datos
            R::store($reservas);
            //se resta la cantidad de ejemplares
            $libros->ejemplares=$cantidad-1;
            // almceno los datos en la tabla libros 
            R::store($libros);
            
            
        }
        
        redirect(base_url()."libro/Libros/mostrarlibrosusuarios");
        
        
        
        
        
    }
    // recibe las variables del controlador libros.php linea 295
    // esta funcion lo que hace es qeu cuando se pulse sobre el boton
    // sume una unidad a los ejempleres del libro
    // y borra la reserva selcionada
    public function  anularreservalibros($id_usuario,$id,$cantidad,$titulo)
    {
        // me conecto ala base de datos
        $conexion = mysqli_connect("localhost", "root", "", "autores_y_libros");
        //verifico que se  ha conectado bien
        if (mysqli_connect_errno()) {
            printf("Conexion fallida: %s\n", mysqli_connect_error());
            exit();
        }
        // busco el id de la reserva atraves del id de libros
        $consulta= "SELECT id FROM `reservas` WHERE `libros_id`=$id";
        //genero los datos de la basededatos
        $datos= mysqli_query($conexion, $consulta);
        $row = mysqli_fetch_assoc($datos);
        
        
        
        
        //borro esa reserva
        R::trash(R::load('reservas',$row['id']));
        // busco los campos de libro cuyo id es el que pasa el controlador
        $libros= R::load('libros', $id);
        // sumo un ejemplar mas
        $libros->ejemplares=$cantidad+1;
        //almaceno los datos en la tabla libros de la base de datos
        R::store($libros);
        
        
        
        
        redirect(base_url()."libro/Libros/mostrarlibrosusuarios");
        
        
        
        
        
        
        
    }
    
    public function  mostrarboton()
    {
        
        return R::findAll('reservas');
        
        
    }
}


?>