

<h1 class="encabezado">Tabla de autores</h1>

<table class="table" border="1" >

<tr style="text-align:center" class="tablas">

<th>NOMBRE AUTOR</th>


<th>ELIMINAR</th>
<th>MODIFICAR</th>
</tr>


<?php  foreach ($autores as $autor): ?>
	
		   <tr class="tablas1">    
			
			<td style="vertical-align: middle;text-align:center" ><?=
			$autor->nombre_autor;
			?></td>
			
			
			<td style="text-align:center">
		   
		     <form action="<?=base_url()?>autor/Autores/borrar" method="post">
				<input type="hidden" name="id" value="<?=$autor->id?>">
				  <button onclick="submit()">
					<img src="<?=base_url()?>/assets/iconos/basura.png">
							
				 </button>				
				
			</form>    	        	     
		     
		    </td >
			<td style="text-align:center">
			  	<form action="<?=base_url()?>autor/Autores/actualizar" method="post">
				<input type="hidden" name="id" value="<?=$autor->id?>">
				  <button onclick="submit()">
					<img src="<?=base_url()?>/assets/iconos/lapiz.png">
							
				 </button>				
				
			</form>    	        
			</td>
		</tr>
			<?php endforeach;?>
			
			
</table>


		<button type="button" class="volver mx-auto" onclick="window.location.href='<?=base_url()?>libro/Libros/panel_administrativo'"> Volver</button>
   
 
        
  