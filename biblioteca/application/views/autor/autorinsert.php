<?php
$color=$_SESSION['nombre_autor'];

?>

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
          $url=base_url()."libro/Libros/panel_administrativo";
          header('refresh:30; url='.$url);?>
   <a href="<?=base_url()?>libro/Libros/panel_administrativo">&ltAtras</a>    
   
  