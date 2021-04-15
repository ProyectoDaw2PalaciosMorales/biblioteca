<?php
?>
<h1>Formulario de borrado</h1>

<table border="1">
	<tr>
		
		
       	<th>NOMBRE</th>  
        <th>PRIMER APELLIDO</th>   
       <th>SEGUNDO APELLIDO</th>   
       <th>FECHA NACIMIENTO</th>   
       <th>EMAIL</th>   
       <th>TELEFONO</th>    
  	 <th>ELIMINAR</th>  
       <th>ALIAS</th>   
		
		
	</tr>
	<?php foreach ($usuarios as $usuario): ?>
		 <?php if ($usuario ->nombre!="admin"):?>
		<tr>
		    
			
			<td><?=
			$usuario -> nombre;
			?></td>
			
			<td><?=
			$usuario -> primer_apellido ;
			?></td>
			
			<td><?=
			$usuario -> segundo_apellido ;
			?></td>
			
			<td><?=
			$usuario -> fecha_nacimiento;
			?></td>
			
			<td>
		    <?=
			$usuario -> email;?>
			</td>
			
			<td>
			  <?=
			$usuario -> telefono;?>
			</td>	  				  
			
			
			<td>
			  <?=
			  $usuario ->alias;?>
			</td>
			 <td>
		   
		     <form action="<?=base_url()?>Administrar_Usuarios/borrar" method="post">
				<input type="hidden" name="id" value="<?=$usuario->id?>">
				  <button onclick="submit()">
					<img src="<?=base_url()?>/assets/iconos/basura.png">
							
				 </button>
				
				</form>	        		     	     
		     		     
		  
		    </td>
				
				
		</tr>
			<?php endif;?>
			<?php endforeach;?>		
		
</table>

      <a href="<?=base_url()?>login/acceso">Home</a>    
        
  
          



