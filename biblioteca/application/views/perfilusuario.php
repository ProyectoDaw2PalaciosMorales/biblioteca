<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body>
 <h1>Perfil</h1>
 
<form action="<?=base_url()?>Actualizarperfil/actualizar" method="post">
				<input type="hidden" name="id" value="<?=$usuario->id?>">
			
				  <button onclick="submit()">
				  modicar tus datos
						
				 </button>				
				
			</form>    	        	     
 
   <form action="<?=base_url()?>Borrador_perfil/borrar_perfil" method="post">
				<input type="hidden" name="id" value="<?=$usuario->id?>">
				<input type="hidden" name="nombre" value="<?=$usuario->nombre?>">
				  <button onclick="submit()">
				   Eliminar tu cuenta
							
				 </button>				
				
			</form>    	        	     
 

 
      <h2>Tus datos</h2>
     	<?php if ($usuario ->foto!=null):?>
			
				<img src="<?=base_url()?>assets/fotosperfil/usuario-<?=
				$usuario -> nombre;?>.<?=
			$usuario -> foto;?>"  width="80" height="80">
		
			<?php  else:?>
	
			<img src="<?=base_url()?>assets/fotosperfil/noimagen.jpg"
					  width="80" height="80">
					 
			<?php endif;?>
       <p>Nombre: <?=$usuario -> nombre?> </p>
        <p>Primer apellido: <?=$usuario ->primer_apellido ?> </p>
        <p>Segundo apellido: <?=$usuario -> segundo_apellido?> </p>
        <p>Fecha nacimento: <?=$usuario -> fecha_nacimiento?> </p>
          <p>Fecha de registro: <?=$usuario -> fecha_de_registro?> </p>
        <p>Email: <?=$usuario -> email?> </p>
        <p>Telefono: <?=$usuario -> telefono?> </p>
        <p>Alias: <?=$usuario -> alias?> </p>
          <p>Tus reservas: </p>
          
           <ol>
        <?php foreach ($reservas as $reserva): ?>
       	<?php if ($reserva->reserva->id==$usuario->id):?>
        <li> <?=$reserva->libros->titulo?></li>
<?php  else:?>
      <?php endif;?>    
          	<?php endforeach;?>
          	</ol>
         <a href="<?=base_url()?>login/acceso">HOME</a>
   </body>     
 </html>
        
  