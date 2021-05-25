



<table class="table table-dark" border="1" >
<h1 style="text-align:center">TABLA DE AUTORES</h1>
<tr style="text-align:center">

<th>NOMBRE AUTOR</th>


<th>ELIMINAR</th>
<th>MODIFICAR</th>
</tr>


<?php  foreach ($autores as $autor): ?>
	
		       
			
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

   <a href="<?=base_url()?>libro/Libros/panel_administrativo">&ltAtras</a>  
 
        
  