<nav class="container navbar navbar-expand-sm bg-dark navbar-dark rounded">

	<a class="navbar-brand" href="<?=base_url()?>">
		<img src="<?=base_url()?>assets/img/icons/pap.png" alt="INICIO" style="width:40px;">
	</a>

	<ul class="navbar-nav">
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
				BEANS
			</a>

			<div class="dropdown-menu">
				<a class="dropdown-item" href="<?=base_url()?>pais/r">País</a>
				<a class="dropdown-item" href="<?=base_url()?>aficion/r">Afición</a>
				<a class="dropdown-item" href="<?=base_url()?>persona/r">Persona</a>
			</div>
		</li>
		
		<li class="nav-item">
			<a class="nav-link" href="<?=base_url()?>pais/r">
				País
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link" href="<?=base_url()?>aficion/r">
				Afición
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link" href="<?=base_url()?>persona/r">
				Persona
			</a>
		</li>

		
   </ul>
</nav>
 <nav class="container navbar navbar-expand-sm bg-dark navbar-dark rounded">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>   
      <li class="nav-item">
        <form class="form-inline" action="/action_page.php">
            		<input class="form-control-sm input-sm buscar" type="text" placeholder="Search">
            		<button class="btn btn-success" type="submit">Search</button>
         	 	</form>
      </li> 
          <li class="nav-item">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          <?php if (is_file("assets/fotosperfil/usuario-".$nombre.".png" )):?>
        <img class="avatar" src="<?=base_url()?>assets/fotosperfil/usuario-<?=$nombre;?>.png">
         <?php  else:?>
         <img class="avatar" src="<?=base_url()?>assets/fotosperfil/noimagen.jpg">
                    <?php endif;?>
      </a>
      <div class="dropdown-menu">
          
				    <form  name="formulario1" action="<?=base_url()?>usuario/Perfil/perfil_usuario" method="post">
					<input type="hidden" name="id" value= "<?= $idusuario;?>">
					<a href='javascript:enviar_formulario()'>Perfil</a>
				  </form> 						
			   <a href='<?=base_url()?>usuario/Cerrar_sesion/cerrar'>Cerrar sesion</a>	  		
      </div>
      </li> 
    </ul>
  </div>  
</nav>
    