<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body>
<div align="center">
<table border="1">
 <h1>TABLA DE LIBROS</h1>

 
<tr>


<th>TÍTULO</th>
<th>AÑO DE EDICIÓN</th>
<th>EDITORIAL</th>
<th>AUTOR</th>
<th>Nº DE EJEMPLARES</th>
<th>RESERVAR</th>
 <th>ANULAR RESERVA</th>
		
<?php foreach ($libros as $libro): ?>
		
				
				
		         
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
			$libro ->autor->nombre_autor;
			?></td>
			 <?php if (	$libro -> ejemplares>0):?>
			<td><?=
			$libro -> ejemplares;
			?></td>
			
				<?php  else:?>
				<td><span>No hay reservas disponibles</span>
			<?php endif;?>  	
			</td>
			
			
				<td>
		
		     <form action="<?=base_url()?>Reserva_libros/reserva" method="post">
		        <input type="hidden" name="id" value="<?=($libro->id)?>">
		        <input type="hidden" name="id_usuario" value="<?=$_SESSION['idperfil']?>">
		              <input type="hidden" name="titulo" value="<?=($libro->titulo)?>">
				
					<input type="hidden" name="cantidad" value="<?=($libro->ejemplares)?>">
					
				  <button onclick="submit()">
					<p>Reserva</p>
							
				 </button>				
				
			</form>    	        	     
		     
		    </td>
	
				<td>
			  <?php foreach ($anulaciones as $anulacion): ?> 
			   
		      <?php if ($anulacion->libros_id ==$libro->id ):?>
		      
				
		     <form action="<?=base_url()?>Anularreserva_libros/anularreserva" method="post">
		        <input type="hidden" name="id" value="<?=($libro->id)?>">
		        <input type="hidden" name="id_usuario" value="<?=$_SESSION['idperfil']?>">
		              <input type="hidden" name="titulo" value="<?=($libro->titulo)?>">
				
					<input type="hidden" name="cantidad" value="<?=($libro->ejemplares)?>">
					
				  <button onclick="submit()">
					<p>Anular reserva</p>
							
				 </button>		
				 
					
				
			</form>  
				   	     
		     
		  
		          
     
		      <?php  else:?>
		   
		
			<?php endif;?>  
			<?php endforeach;?>
		     </td>
		</tr>
			
					
		<?php endforeach;?>
</table>
</div>
    
          <?php 
          $url=base_url()."Administrador_libros/panel_administrativo";
          header('refresh:30; url='.$url);?>
   <a href="<?=base_url()?>login/acceso">HOME</a>
   
   </body>     
   </html>   