

<table class="table table-dark" border="1">
 <h1 style="text-align:center">TABLA DE LIBROS</h1>

  <p style="text-align:center"><b>La actualizacion se realizo correctamente</b></p>
<tr style="text-align:center">


<th>TÍTULO</th>
<th>AÑO DE EDICIÓN</th>
<th>EDITORIAL</th>
<th>AUTOR</th>
<th>Nº DE EJEMPLARES</th>


<?php foreach ($libros as $libro): ?>
		
		<tr>
	   <?php if ($color -> id== $libro->id):?>
		 	
			<td style="background-color:red;vertical-align: middle;text-align:center"><?=
			$libro -> titulo;
			?></td>
			
			<td style="background-color:red;vertical-align: middle;text-align:center"><?=
			$libro -> ano_edicion ;
			?></td>
			
			<td style="background-color:red;vertical-align: middle;text-align:center"><?=
			$libro -> editorial ;
			?></td>
			
			<td style="background-color:red;vertical-align: middle;text-align:center"><?=
			$libro -> autor;
			?></td>
			
			<td style="background-color:red;vertical-align: middle;text-align:center"><?=
			$libro -> ejemplares;
			?></td>
			
			
			<?php  else:?>
			<td style="text-align:center" ><?=
			$libro -> titulo;
			?></td>
			
			<td style="text-align:center"><?=
			$libro -> ano_edicion ;
			?></td>
			
			<td style="text-align:center" ><?=
			$libro -> editorial ;
			?></td>
			
			<td style="text-align:center"><?=
			$libro -> autor;
			?></td>
			
			<td style="text-align:center"><?=
			$libro -> ejemplares;
			?></td>
			<?php endif;?>
			
			
			
		</tr>		
		<?php endforeach;?>
</table>

            
          <?php 
          $url=base_url()."libro/Libros/panel_administrativo";
          header('refresh:30; url='.$url);?>
   <a href="<?=base_url()?>libro/Libros/panel_administrativo">&ltAtras</a>    
   
   