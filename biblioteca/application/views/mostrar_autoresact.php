<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body>
<div align="center">
<table border="1">
 <h1>TABLA DE AUTORES</h1>

  <p><b>La actualizacion se realizo correctamente</b></p>
<tr>


<th>TÍTULO</th>
<th>AÑO DE EDICIÓN</th>
<th>EDITORIAL</th>



<?php foreach ($autores as $autor): ?>
		
		<tr>
	   <?php if ($color ->id== $autor->id):?>
		 	
			<td style="background-color:red"><?=
			$autor ->nombre_autor;
			?></td>
			
			<td style="background-color:red"><?=
			$autor -> ciudad ;
			?></td>
			
			<td style="background-color:red"><?=
			$autor -> fecha_nacimiento ;
			?></td>
			
		
			
			
			<?php  else:?>
			
				<td ><?=
			$autor ->nombre_autor;
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
          $url=base_url()."Administrador_libros/panel_administrativo";
          header('refresh:30; url='.$url);?>
   <a href="<?=base_url()?>Administrador_libros/panel_administrativo">&ltAtras</a>    
   
   </body>     
   </html>   