<?php

$nombre= $_SESSION['nombre'];

$idusuario=$_SESSION['idperfil'];

?>

<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
         <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/estilos.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
function enviar_formulario(){
   document.formulario1.submit()
}
function enviar_formulario2(){
   document.formulario2.submit()
}
</script>
    </head>

    <body>
    
   <nav class="container navbar navbar-expand-sm bg-dark navbar-dark rounded">
 <a class="navbar-brand" href="<?=base_url()?>">TuBiblioteca</a>
  <ul class="navbar-nav">
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
				BEANS
			</a>

			<div class="dropdown-menu">
				<a class="dropdown-item" href="<?=base_url()?>">#</a>
				<a class="dropdown-item" href="<?=base_url()?>">#</a>
				<a class="dropdown-item" href="<?=base_url()?>">#</a>
			</div>
		</li>
		
		<li class="nav-item">
			<a class="nav-link" href="<?=base_url()?>">
				Link
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link" href="<?=base_url()?>">
				Link
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link" href="<?=base_url()?>">
				Link
			</a>
		</li>
		 <li class="nav-item">
        <form class="form-inline" action="/action_page.php">
            		<input class="form-control-sm input-sm buscar" type="text" placeholder="Search">
            		<button class="btn btn-success" type="submit">Search</button>
         	 	</form>
      </li> 

          <li class="dropdown ">
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
</nav>

    
     
	    
 <!--     <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
     		
         <div class="col-sm-3 col-md-3">
  			<a class="navbar-brand" href="#">Tu Biblioteca</a>
  		</div>
  		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  		
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
             </ul>
      		
      	
      	<div class="col-sm-3 col-md-3"> 
      			<form class="form-inline" action="/action_page.php">
            		<input class="form-control-sm input-sm buscar" type="text" placeholder="Search">
            		<button class="btn btn-success" type="submit">Search</button>
         	 	</form>
        </div>
        <div class="col-sm-3 col-md-3">
       <ul class="navbar-nav">
         	 <li class="nav-item dropdown">
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
 
   -->  
  
 
   
            <h1 style='text-align:center;'>Bienvenid@ "<?= $nombre; ?>", Magneto te saluda"</h1>
            
           
                
              <br><br>
                   
                    <?php if ($nombre=="admin"):?>
                    <a href='<?=base_url()?>usuario/Administrar_Usuarios/usuarios'>Nuestros usuarios</a>
                    <br><br>
                              
                    
                    <a href='<?=base_url()?>libro/Administrador_libros/panel_administrativo'>Administrar libros</a>
                    <br><br>
                    <?php  else:?>
                    <?php endif;?>
                     <a href='<?=base_url()?>libro/Mostrarlibros/mostrarusuario'>Mostrar libros</a>
                       <br><br>
                    <a href='<?=base_url()?>autor/Autores/autor'>Elija un autor para ver sus obras</a>
                    <br><br>
                    <a href='<?=base_url()?>libro/Generos/genero'>Tus genereros favoritos</a>
                    <br><br>
                 <!--   <form  name="formulario1" action="<?=base_url()?>usuario/Perfil/perfil_usuario" method="post">
					<input type="hidden" name="id" value= "<?= $idusuario;?>">
					<a href='javascript:enviar_formulario()'>Perfil</a>
				  </form>-->					
				       		
                  
                      <form  name="formulario2" action="<?=base_url()?>comentario/Comentarios/comentario" method="post">
					<input type="hidden" name="id" value= "<?= $idusuario;?>">
					<a href='javascript:enviar_formulario2()'>Tus comentarios</a>
				  </form> 		
                    <a href='<?=base_url()?>usuario/Cerrar_sesion/cerrar'>Cerrar sesion</a>
                  
                                                        
                    
           </body>
</html>                                
			   	       
             		
                  
      
