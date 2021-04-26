


<div align="center">
<table border="1" >
<h1>TABLA DE AUTORES</h1>
<tr>

<th>NOMBRE AUTOR</th>
<th>CIUDAD</th>
<th>FECHA NACIMENTOL</th>
<th>ELIMINAR</th>
<th>MODIFICAR</th>
</tr>


<?php  foreach ($autores as $autor): ?>
		
		<tr>
		    
			
			<td ><?=
			$autor->nombre_autor;
			?></td>
			
			<td ><?=
			$autor -> ciudad ;
			?></td>
			
			<td><?=
			$autor -> fecha_nacimiento ;
			?></td>
			<td>
		   
		     <form action="<?=base_url()?>autor/Autores/borrar" method="post">
				<input type="hidden" name="id" value="<?=$autor->id?>">
				  <button onclick="submit()">
					<img src="<?=base_url()?>/assets/iconos/basura.png">
							
				 </button>				
				
			</form>    	        	     
		     
		    </td>
			<td>
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
</div>
   <a href="<?=base_url()?>libro/Libros/panel_administrativo">&ltAtras</a>  
 
        
  