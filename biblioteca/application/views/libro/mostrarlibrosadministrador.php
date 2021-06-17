

<h1 class="encabezado">Tabla  de  libros</h1>

<table border="1" class="table" >

<tr style="text-align:center" class="tablas">

<th>TÍTULO</th>
<th>AÑO DE EDICIÓN</th>
<th>EDITORIAL</th>
<th>AUTOR</th>
<th>Nº DE EJEMPLARES</th>
<th>ELIMINAR</th>
<th>MODIFICAR</th>
</tr>


<?php  foreach ($libros as $libro): ?>
		
		<tr class="tablas1">
		    
			
			<td style="vertical-align: middle;text-align:center"><?=
			$libro -> titulo;
			?></td>
			
			<td style="vertical-align: middle;text-align:center"><?=
			$libro -> ano_edicion ;
			?></td>
			
			<td style="vertical-align: middle;text-align:center"><?=
			$libro -> editorial ;
			?></td>
			
			<td style="vertical-align: middle;text-align:center"><?=
			$libro -> autor;
			?></td>
			<td style="vertical-align: middle;text-align:center"><?=
			$libro -> ejemplares;
			?></td>
			
			<td style="text-align:center">
		   
		     <form action="<?=base_url()?>libro/Libros/borrar" method="post">
				<input type="hidden" name="id" value="<?=$libro->id?>">
					<input type="hidden" name="titulo" value="<?=$libro->titulo?>">
				  <button onclick="submit()">
					<img src="<?=base_url()?>/assets/iconos/basura.png">
							
				 </button>				
				
			</form>    	        	     
		     
		    </td>
			<td style="text-align:center">
			  	<form action="<?=base_url()?>libro/Libros/actualizar" method="post">
				<input type="hidden" name="id" value="<?=$libro->id?>">
				  <button onclick="submit()">
					<img src="<?=base_url()?>/assets/iconos/lapiz.png">
							
				 </button>				
				
			</form>    	        
			</td>
		</tr>
			
					
		<?php endforeach;?>
</table>

	<button type="button" class="volver mx-auto" onclick="window.location.href='<?=base_url()?>libro/Libros/panel_administrativo'"> Volver</button>
    
  
        
  