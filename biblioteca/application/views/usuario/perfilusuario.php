<div class="profile">
				  <?php 
            $sustitutuirespaciosblancos = str_replace(" ","_",$_SESSION['nombre'])?>
          <?php if (is_file("assets/fotosperfil/usuario-". $sustitutuirespaciosblancos.".png" )):?>
        <img  src="<?=base_url()?>assets/fotosperfil/usuario-<?= $sustitutuirespaciosblancos?>.png"style="width: 100%;">
         <?php  else:?>
         <img src="<?=base_url()?>assets/fotosperfil/noimagen.jpg"style="width:100%;">
                    <?php endif;?>
				
			
				
  <h1>	<?=$usuario -> nombre?> <?=$usuario ->primer_apellido ?> <?=$usuario -> segundo_apellido?>.</h1>
  
  <ul>
       <li>
		<p>Fecha de nacimiento: <?=$usuario -> fecha_nacimiento?> </p>
	</li>
	<li>
		<p>Fecha de registro: <?=$usuario -> fecha_de_registro?> </p>
	</li>
    <li>
		<p>Email: <?=$usuario -> email?> </p>
	</li>
	<li>
        <p>Telefono: <?=$usuario -> telefono?> </p>
	</li>
	<li>
        <p>Alias: <?=$usuario -> alias?> </p>
	</li>
  	<li>
		<p>
		<form action="<?=base_url()?>usuario/Usuarios/actualizar" method="post">
				<input type="hidden" name="id" value="<?=$usuario->id?>">
				 <button onclick="submit()" class="enlace"> <a><i class="fas fa-user"></i> Editar</a>
				 </button>				
				
			</form>    
		</p>
	</li>
						
 	<li><p><a><i class="fas fa-book"></i> Reservas</a></p></li>
	 <li>
	 
       AddREs
          
	 </li>
	
  <li><p><form action="<?=base_url()?>usuario/Usuarios/borrar" method="post">
				<input type="hidden" name="id" value="<?=$usuario->id?>">
				<input type="hidden" name="alias" value="<?=$usuario->alias?>">
				  <button onclick="submit()" class="btn btn-danger  btn-lg ">
				   Eliminar tu cuenta
							
				 </button>				
				
			</form>    	</p></li></ul>
</div>
<button type="button" class="btn btn-dark" onclick="window.location.href='<?=base_url()?>libro/Libros/mostrarlibrosusuarios'"> Volver</button>



  