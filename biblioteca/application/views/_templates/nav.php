  
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
 <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse bg-dark"  id="collapsibleNavbar">
    <ul class="navbar-nav">
   		
          <li class="nav-link" ><a href="#">Link</a></li>
          <li class="nav-link"><a href="#">Link</a></li>
          <li class="nav-link"><a href="#">Link</a></li>
        
          <li><form class="form-inline" action="/action_page.php">
            		<input class="form-control-sm input-sm buscar" type="text" placeholder="Search">
            		<button class="btn btn-success btn-sm" type="submit">Search</button>
         	 	</form></li>
      <li class="dropdown">
         <?php if (  isset( $_SESSION['nombre'])):?>            
        
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          <?php if (is_file("assets/fotosperfil/usuario-".$_SESSION['nombre'].".png" )):?>
        <img class="avatar" src="<?=base_url()?>assets/fotosperfil/usuario-<?=$_SESSION['nombre']?>.png">
         <?php  else:?>
         <img class="avatar" src="<?=base_url()?>assets/fotosperfil/noimagen.jpg">
                    <?php endif;?>
      </a>
        <ul class="dropdown-menu">
        
          <li><form  name="formulario1" action="<?=base_url()?>usuario/Usuarios/perfil_usuario" method="post">
					<input type="hidden" name="id" value= "1">
					<a href='javascript:enviar_formulario()'>Perfil</a>
				  </form></li>
          <li> <a href='<?=base_url()?>usuario/Usuarios/cerrar'>Cerrar sesion</a></li>
         
        
        </ul>
      </li>
       <?php  else:?>
        <?php endif;?>
       
    </ul>
  </div>  
</nav>
<!--    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
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
     
   
     <?php if (  isset( $_SESSION['nombre'])):?>
     
           
   
          <li class="nav-item">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          <?php if (is_file("assets/fotosperfil/usuario-".$_SESSION['nombre'].".png" )):?>
        <img class="avatar" src="<?=base_url()?>assets/fotosperfil/usuario-<?=$_SESSION['nombre']?>.png">
         <?php  else:?>
         <img class="avatar" src="<?=base_url()?>assets/fotosperfil/noimagen.jpg">
                    <?php endif;?>
      </a>
      <div class="dropdown-menu">
          
				    <form  name="formulario1" action="<?=base_url()?>usuario/Usuarios/perfil_usuario" method="post">
					<input type="hidden" name="id" value= "1">
					<a href='javascript:enviar_formulario()'>Perfil</a>
				  </form> 						
			   <a href='<?=base_url()?>usuario/Usuarios/cerrar'>Cerrar sesion</a>	  		
      </div>
      </li> 
       <?php  else:?>
        <?php endif;?>
    </ul>
  </div>  
</nav>
    --> 


