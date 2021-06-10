<?php
 
$CantidadMostrar=5;
//Conexion  al servidor mysql
$conetar = new mysqli("localhost", "root", "", "autores_y_libros");
if ($conetar->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conetar->connect_errno . ") " . $conetar->connect_error;
}else{
                    // Validado  la variable GET
    $compag         =(int)(!isset($_GET['pag'])) ? 1 : $_GET['pag']; 
	$TotalReg       =$conetar->query("SELECT * FROM libros");
	//Se divide la cantidad de registro de la BD con la cantidad a mostrar 
	$TotalRegistro  =ceil($TotalReg->num_rows/$CantidadMostrar);
	
	//Consulta SQL
	$consultavistas ="SELECT
						*
						FROM
						libros
						ORDER BY
					    titulo
						LIMIT ".(($compag-1)*$CantidadMostrar)." , ".$CantidadMostrar;
                       // echo $consultavistas;
	$consulta=$conetar->query($consultavistas);
	$url=base_url();
	while ($lista=$consulta->fetch_row()) {  
		$sustitutuirespaciosblancos = str_replace(" ","_",$lista[1]);
		$resumendescricion = explode(".",$lista[7]);
	  

echo '  <div class="card mb-3 mx-auto cuerpo"style="background-color: #eee;">';
echo '   <div class="row" >';

echo '  <div class="col-md-3 offset-md-3 mx-auto">'; 
echo '  <form action="'.$url.'libro/Libros/mostrarlibrosampliacion" method="post" >';
echo ' <input type="hidden" name="id" value='.$lista[0].'">';
echo ' <img onclick="submit()" class="card-img mx-auto" style="width:50%;" src="'.$url.'/assets/fotoslibros/'.$sustitutuirespaciosblancos.'.png">';
echo '  </form>   ';
echo '   </div>';

echo '  <div class="col-md-8">';

echo '  <div class="card-body titulo_libro">';
echo '  <h4 class="card-title">'.$lista[1].'</h4>';
echo '  <p class="card-text">'.$resumendescricion[0].'</p>';
echo '<div class="col-md-8">';
echo '   <form action="'.$url.'libro/Libros/mostrarlibrosampliacion" method="post">';
echo '  <input type="hidden" name="id" value='.$lista[0].'>';
echo '  <button class="boton3 stretched-link" onclick="submit()">';
echo '  Ver mas';
echo '   </button>';
echo ' </form>';
echo '</div>';
echo '</div>';

echo '</div>';


echo '</div>';
echo '</div> ';              
					  
	   
	}
	   
     
	/*Sector de Paginacion */
	
	//Operacion matematica para boton siguiente y atras
	$IncrimentNum =(($compag +1)<=$TotalRegistro)?($compag +1):1;
	$DecrementNum =(($compag -1))<1?1:($compag -1);
	
	echo "<ul class='ulbarrapaginacion'><li><a class=\"flechas\" href=\"?pag=".$DecrementNum."\">◀</a></li>";
	//Se resta y suma con el numero de pag actual con el cantidad de
	//numeros  a mostrar
	$Desde=$compag-(ceil($CantidadMostrar/2)-1);
	$Hasta=$compag+(ceil($CantidadMostrar/2)-1);
	
	//Se valida
	$Desde=($Desde<1)?1: $Desde;
	$Hasta=($Hasta<$CantidadMostrar)?$CantidadMostrar:$Hasta;
	//Se muestra los numeros de paginas
	for($i=$Desde; $i<=$Hasta;$i++){
	    //Se valida la paginacion total
	    //de registros
	    if($i<=$TotalRegistro){
	        //Validamos la pag activo
	        if($i==$compag){
	            echo "<li  class=\"active\"><a href=\"?pag=".$i."\">".$i."</a></li>";
	        }else {
	            echo "<li  ><a href=\"?pag=".$i."\">".$i."</a></li>";
	        }
	    }
	}
	echo "<li ><a class=\"flechas\" href=\"?pag=".$IncrimentNum."\">▶</a></li></ul>";
	
}
?>
 