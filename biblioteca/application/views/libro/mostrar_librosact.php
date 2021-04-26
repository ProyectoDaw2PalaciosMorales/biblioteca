
<div align="center">
<table border="1">
 <h1>TABLA DE LIBROS</h1>

  <p><b>La actualizacion se realizo correctamente</b></p>
<tr>


<th>TÍTULO</th>
<th>AÑO DE EDICIÓN</th>
<th>EDITORIAL</th>
<th>AUTOR</th>
<th>Nº DE EJEMPLARES</th>


<?php foreach ($libros as $libro): ?>
		
		<tr>
	   <?php if ($color -> id== $libro->id):?>
		 	
			<td style="background-color:red"><?=
			$libro -> titulo;
			?></td>
			
			<td style="background-color:red"><?=
			$libro -> ano_edicion ;
			?></td>
			
			<td style="background-color:red"><?=
			$libro -> editorial ;
			?></td>
			
			<td style="background-color:red"><?=
			$libro -> autor->nombre_autor;
			?></td>
			
			<td style="background-color:red"><?=
			$libro -> ejemplares;
			?></td>
			
			
			<?php  else:?>
			<td ><?=
			$libro -> titulo;
			?></td>
			
			<td ><?=
			$libro -> ano_edicion ;
			?></td>
			
			<td ><?=
			$libro -> editorial ;
			?></td>
			
			<td ><?=
			$libro -> autor->nombre_autor;
			?></td>
			
			<td ><?=
			$libro -> ejemplares;
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
   
   