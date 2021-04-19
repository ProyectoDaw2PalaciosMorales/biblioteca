<?php
$color=$_SESSION['nombre_autor'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<div align="center">
<table border="1">
 <h1>TABLA DE AUTORES</h1>

  <p><b>La inserccion se realizo correctamente</b></p>
<tr>


<th>NOMBRE AUTOR</th>
<th>CIUDAD</th>
<th>FECHA NACIMIENTO</th>


<?php foreach ($autores as $autor): ?>
		
		
		<tr>
	   <?php if ($color==$autor->nombre_autor):?>
		 	
			<td style="background-color:red"><?=
			$autor->nombre_autor;
			?></td>
			
			<td style="background-color:red"><?=
			$autor -> ciudad ;
			?></td>
			
			<td style="background-color:red"><?=
			$autor -> fecha_nacimiento ;
			?></td>
			
			
			
			
			<?php  else:?>
			<td ><?=
			$autor->nombre_autor;
			?></td>
			
			<td ><?=
			$autor -> ciudad ;
			?></td>
			
			<td ><?=
			$autor -> fecha_nacimiento ;
			?></td>
			
		
			<?php endif;?>
			
			
			
		</tr>		
		<?php endforeach;?>
		
</table>
</div>
            
          <?php 
          $url=base_url()."libro/Administrador_libros/panel_administrativo";
          header('refresh:30; url='.$url);?>
   <a href="<?=base_url()?>autor/Insertar_autor/insertarautor">&ltAtras</a>    
   
   </body>     
   </html>   