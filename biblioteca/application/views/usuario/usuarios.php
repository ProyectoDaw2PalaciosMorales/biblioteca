
<h1 class="encabezado">Tabla de usuarios</h1>

<table class="table">
	<tr  class="tablas">
		
		
       	<th>NOMBRE</th>  
        <th>PRIMER APELLIDO</th>   
       <th>SEGUNDO APELLIDO</th>   
       <th>FECHA NACIMIENTO</th>   
       <th>CORREO ELECTRONICO</th>   
       <th>TELEFONO</th>
       <th>ALIAS</th>       
  		<th>ELIMINAR</th>  
       
		
		
	</tr>
	
	<?php foreach ($usuarios as $usuario): ?>
		 <?php if ($usuario ->nombre!="admin"):?>
		<tr class="tablas1">
		    
			
			<td style="vertical-align: middle;text-align:center"><?=
			$usuario -> nombre;
			?></td>
			
			<td style="vertical-align: middle;text-align:center"><?=
			$usuario -> primer_apellido ;
			?></td>
			
			<td style="vertical-align: middle;text-align:center" ><?=
			$usuario -> segundo_apellido ;
			?></td>
			
			<td style="vertical-align: middle;text-align:center"><?=
			$usuario -> fecha_nacimiento;
			?></td>
			
			<td style="vertical-align: middle;text-align:center">
		    <?=
			$usuario -> email;?>
			</td>
			
			<td style="vertical-align: middle;text-align:center">
			  <?=
			$usuario -> telefono;?>
			</td>	  				  
			
			
			<td style="vertical-align: middle;text-align:center">
			  <?=
			  $usuario ->alias;?>
			</td>
			 <td style="text-align:center;">
		   
		     <form action="<?=base_url()?>usuario/Usuarios/borraradmin" method="post">
				<input type="hidden" name="id" value="<?=$usuario->id?>">
				<input type="hidden" name="alias" value="<?=$usuario->alias?>">
				  <button onclick="submit()">
					<img src="<?=base_url()?>/assets/iconos/basura.png">
							
				 </button>
				
				</form>	        		     	     
		     		     
		  
		    </td>
				
				
		</tr>
			<?php endif;?>
			<?php endforeach;?>		
		
</table>
		<button type="button" class="volver mx-auto" onclick="window.location.href='<?=base_url()?>usuario/Usuarios/Bienvenidos_x'"> Volver</button>
       
    



