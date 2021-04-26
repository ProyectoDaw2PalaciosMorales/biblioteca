

<div align="center">
<table border="1" >
<h1>TABLA DE LIBROS</h1>
<tr>

<th>TÍTULO</th>
<th>AÑO DE EDICIÓN</th>
<th>EDITORIAL</th>
<th>AUTOR</th>
<th>Nº DE EJEMPLARES</th>
<th>ELIMINAR</th>
<th>MODIFICAR</th>
</tr>


<?php  foreach ($libros as $libro): ?>
		
		<tr>
		    
			
			<td><?=
			$libro -> titulo;
			?></td>
			
			<td><?=
			$libro -> ano_edicion ;
			?></td>
			
			<td><?=
			$libro -> editorial ;
			?></td>
			
			<td><?=
			$libro -> autor->nombre_autor;
			?></td>
			<td><?=
			$libro -> ejemplares;
			?></td>
			
			<td>
		   
		     <form action="<?=base_url()?>libro/Libros/borrar" method="post">
				<input type="hidden" name="id" value="<?=$libro->id?>">
				  <button onclick="submit()">
					<img src="<?=base_url()?>/assets/iconos/basura.png">
							
				 </button>				
				
			</form>    	        	     
		     
		    </td>
			<td>
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
</div>
   <a href="<?=base_url()?>libro/Libros/panel_administrativo">&ltAtras</a>  
  
        
  