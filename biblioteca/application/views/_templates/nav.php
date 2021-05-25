  
<nav class="navbar navbar-expand-md bg-dark navbar-dark p-1">

 <div class="navbar-header  ">
 
      <a class="navbar-brand"  style="margin-top:-50px" href='<?=base_url()?>'>TU BIBLIOTECA</a>
    </div>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse bg-dark"  id="collapsibleNavbar">
    <ul class="navbar-nav "			>
   		
       
          <li class="nav-item" > <a class="text-white nav-link" style="font-size: 15px;margin-top:25px;margin-left:30px;" href='<?=base_url()?>autor/Autores/autor'>Elija su autor </a></li>
          <li class="nav-item"><a class="text-white nav-link"  style="font-size: 15px;margin-top:25px;margin-left:30px;"href='<?=base_url()?>libro/Libros/genero'>Elija su genereros favoritos</a></li>
         

               <?php if (isset( $_SESSION['nombre'])!=null):?>    
                <li class="nav-item"><a class="text-white nav-link" style="font-size: 15px;margin-top:25px ;margin-left:30px;" href='<?=base_url()?>usuario/Usuarios/Bienvenidos_u'>Menu principal</a></li>
                 <?php  else:?>
                  <?php endif;?>
       
    
          <li class="form-group">
    
     <form class="form-inline" action="/action_page.php">
      <input type="text" class="form-control"  placeholder="buscar" name="" style="margin-top:25px;margin-left:35px">
    <button type="submit" class="btn btn-default  btn-success btn-sm"style="font-size: 15px;margin-left:9px;margin-top:25px;">Buscador</button>
    </form>
   
    
  </li>
      <li class="dropdown">
         <?php if (  !isset( $_SESSION['nombre'])):?>            
        
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       <img class="avatar" src="<?=base_url()?>assets/fotosperfil/noimagen.jpg"style="font-size: 15px;margin-left:110px;margin-top:25px;"> </a>
       
         <?php  else:?>
           <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            <?php 
            $sustitutuirespaciosblancos = str_replace(" ","_",$_SESSION['nombre'])?>
          <?php if (is_file("assets/fotosperfil/usuario-". $sustitutuirespaciosblancos.".png" )):?>
        <img class="avatar" src="<?=base_url()?>assets/fotosperfil/usuario-<?= $sustitutuirespaciosblancos?>.png"style="font-size: 25px;margin-left:110px;margin-top:25px;">
         <?php  else:?>
         <img class="avatar" src="<?=base_url()?>assets/fotosperfil/noimagen.jpg"style="font-size: 15px;margin-left:110px;margin-top:25px;">
                    <?php endif;?>
      </a>
        
                    <?php endif;?>
     
        <ul class="dropdown-menu bg-dark text-md-left ">
        <?php if (  !isset( $_SESSION['nombre'])):?>  
<<<<<<< HEAD
         <li> <a class="text-white nav-link" href='<?=base_url()?>usuario/Usuarios/accesoget'>  login</a></li>
=======
         <li> <a   style="margin-left:12px;" class="text-white nav-link" href='<?=base_url()?>usuario/Usuarios/accesoget'>Iniciar sesion</a></li>
>>>>>>> 0d30d3d6668aab3112c066047d55e1ab57be4245
         <?php  else:?>
          <li><form style="margin-left:12px;" name="formulario1" action="<?=base_url()?>usuario/Usuarios/perfil_usuario" method="post">

					<input type="hidden" name="id" value="<?=$_SESSION['idusuario']?>">
								          
					<a class="text-white text-decoration-none" href='javascript:enviar_formulario()'>  Perfil</a>
				  </form></li>
				  
<<<<<<< HEAD
          <li> <a class="text-white  text-decoration-none" href='<?=base_url()?>usuario/Usuarios/cerrar'>  Cerrar sesion</a></li>
=======
          <li> <a  style="margin-left:12px;" class="text-white  text-decoration-none" href='<?=base_url()?>usuario/Usuarios/cerrar'>Cerrar sesion</a></li>
>>>>>>> 0d30d3d6668aab3112c066047d55e1ab57be4245
         <?php endif;?>
        </ul>
      </li>
      
       
       
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


  