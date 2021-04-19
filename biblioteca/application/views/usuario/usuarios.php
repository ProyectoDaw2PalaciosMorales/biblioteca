<!DOCTYPE html>
<html lang="es">
<head>
<title>Registro de la biblioteca</title>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>
<body>
<h1>Formulario de borrado</h1>

<table border="1">
	<tr>
		
		
       	<th>NOMBRE</th>  
        <th>PRIMER APELLIDO</th>   
       <th>SEGUNDO APELLIDO</th>   
       <th>FECHA NACIMIENTO</th>   
       <th>EMAIL</th>   
       <th>TELEFONO</th>
       <th>ALIAS</th>       
  	 <th>ELIMINAR</th>  
       
		
		
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
		   
		     <form action="<?=base_url()?>usuario/Administrar_Usuarios/borrar" method="post">
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

      <a href="<?=base_url()?>usuario/login/acceso">Home</a>    
        
  </body>
</html>        



