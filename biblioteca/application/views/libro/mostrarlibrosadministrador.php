<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>


<body>

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
		   
		     <form action="<?=base_url()?>libro/Borrarlibros/borrar_libros" method="post">
				<input type="hidden" name="id" value="<?=$libro->id?>">
				  <button onclick="submit()">
					<img src="<?=base_url()?>/assets/iconos/basura.png">
							
				 </button>				
				
			</form>    	        	     
		     
		    </td>
			<td>
			  	<form action="<?=base_url()?>libro/Actualizar_Libros/actualizar" method="post">
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
   <a href="<?=base_url()?>libro/Administrador_libros/panel_administrativo">&ltAtras</a>  
  </body>
   </html>   
        
  