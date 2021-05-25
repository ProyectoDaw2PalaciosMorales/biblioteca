


<table class="table table-dark" border="1">
 <h1 style="text-align:center">TABLA DE AUTORES</h1>

  <p style="text-align:center"><b>La actualizacion se realizo correctamente</b></p>
<tr style="text-align:center">


<th>Nombre_autor</th>




<?php foreach ($autores as $autor): ?>
		
		<tr>
	   <?php if ($color ->id== $autor->id):?>
		 	
			<td style="background-color:red;vertical-align: middle;text-align:center"><?=
			$autor ->nombre_autor;
			?></td>
			
			
		
		
			
			
			<?php  else:?>
			
				<td style="vertical-align: middle;text-align:center"><?=
			$autor ->nombre_autor;
			?></td>
			
			<?php endif;?>
			
			
			
		</tr>		
		<?php endforeach;?>
</table>

            
          <?php 
          $url=base_url()."libro/Libros/panel_administrativo";
          header('refresh:30; url='.$url);?>
   <a href="<?=base_url()?>libro/libros/panel_administrativo">&ltAtras</a>    
   
   