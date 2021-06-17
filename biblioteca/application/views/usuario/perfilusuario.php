
<body class="cuadro_perfil">

<div class="profile border-primary mt-5">
				  <?php 
            $sustitutuirespaciosblancos = str_replace(" ","_",$_SESSION['nombre'])?>
          <?php if (is_file("assets/fotosperfil/usuario-". $sustitutuirespaciosblancos.".png" )):?>
        <img  src="<?=base_url()?>assets/fotosperfil/usuario-<?= $sustitutuirespaciosblancos?>.png"style="width: 100%;border-radius:10px;">
         <?php  else:?>
         <img src="<?=base_url()?>assets/fotosperfil/noimagen.jpg"style="width:100%;border-radius:10px;">
                    <?php endif;?>
				
			
				
  <h1 	style=" text-transform: capitalize"><?=$usuario -> nombre?> <?=$usuario ->primer_apellido ?> <?=$usuario -> segundo_apellido?>.</h1>
  
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
	 <ul class="list-group">
       <?php foreach($reservas as $reserva):?>
	   <?php foreach($nombre_libros as $libro):?>
	  <?php if(($reserva['libros_id']) == ($libro->id)):?>
 		<li style=font-family:"Times New Roman", Times, serif; ><?=$libro->titulo?></li>
          <?php endif; endforeach;endforeach;?>
		</ul>	
	 </li>
	
  <li><p><form action="<?=base_url()?>usuario/Usuarios/borrar" method="post">
				<input type="hidden" name="id" value="<?=$usuario->id?>">
				<input type="hidden" name="alias" value="<?=$usuario->alias?>">
				  <button onclick="submit()" class="btn btn-danger  btn-lg ">
				   Eliminar tu cuenta
							
				 </button>	
				 <a  class="contrasena" href="<?=base_url()?>usuario/Usuarios/recuperarcontrasena">Recupera tu contraseña</a>			
				
			</form>    	</p></li><a  class="contrasena1" href="<?=base_url()?>usuario/Usuarios/cambiarcontrasena">Recupera tu contraseña</a></ul>
			 	
</div>
<button type="button" class="volver mx-auto" onclick="window.location.href='<?=base_url()?>'"> Volver</button>

</body>

  