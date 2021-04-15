<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body>
 <h1>Formulario de Actualizacion</h1>
        <form action="<?=base_url()?>actualizarperfil/actulizarperfilpost" method="post" enctype="multipart/form-data">
             <input type="hidden" name="id" value="<?=$usuario ->id?>">
              
				
			
			
			
         <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?=$usuario -> nombre?>">
        <br><br>
        <label for="primer_apellido">Primer apellido:</label>
        <input type="text" name="primer_apellido"  value="<?=$usuario -> primer_apellido?>">
        <br><br>
        <label for="segundo_apellido">Segundo apellido:</label>
        <input type="text" name="segundo_apellido" value="<?=$usuario -> segundo_apellido?>">
        <br><br>
        <?php $fecha=$usuario->fecha_nacimento;
        $porciones = explode("/", $fecha);?>
      
    

      
        <label for="ano">Año:</label>
        <input style="width:35px; " type="text" name="ano" value="<?=$porciones[0]?>"><span> /</span>
     
         <label for="mes">Mes:</label>
         <input style="width:35px;"type="text" name="mes" value="<?=$porciones[1]?>"><span> /</span>
         
          <label for="dia">Dia:</label>
          <input style="width:35px; "type="text" name="dia" value="<?=$porciones[2]?>">
          
       <br><br>
        <label for="email">Correo electronico:</label>
        <input type="text" name="email" value="<?=$usuario -> email?>">
        <br><br>
        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" value="<?=$usuario ->telefono?>">
        <br><br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" name="password" value="<?=$usuario -> contrasena?>">
        <br><br>
        <label for="comprobacion">Confirma su contraseña:</label>
        <input for="password" name="comprobacion" value="<?=$usuario -> confirmar_contrasena?>">
        <br><br>
        <label for="alias">Nombre de usuario</label>
        <input type="text" name="alias" value="<?=$usuario -> alias?>">
        <br>
        <p>foto antigua</p> 
        <?php if ($usuario ->foto!=null):?>
			
				<img src="<?=base_url()?>assets/fotosperfil/usuario-<?=
				$usuario -> nombre;?>.<?=
			$usuario -> foto;?>"  width="80" height="80">
		
			<?php  else:?>
	
			<img src="<?=base_url()?>assets/fotosperfil/noimagen.jpg"
					  width="80" height="80">
					 
			<?php endif;?>
			  <br><br>
         <label for="idp-fo">foto</label>
		<input id="idp-fo"   type="file"  name="foto" accept="image/x-png,image/gif,image/jpeg" />
		<br><br>
        <input type="submit" value="actualizar">
              
        </form>
        <br><br><br>
      
       
   </body>     
 </html>
        
  