<?php

$nombre= $_SESSION['nombre'];

$idusuario=$_SESSION['idperfil'];

?>

<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
         <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/estilos.css">
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
    
     
     <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
     		
         <div class="col-sm-3 col-md-3">
  			<a class="navbar-brand" href="#">Tu Biblioteca</a>
  		</div>
  		<!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
   	 		<span class="navbar-toggler-icon"></span>
  		</button>-->
  		<div class="col-sm-3 col-md-3">
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
              </ul>
             
      		</div>
      	</div>
      	<div class="col-sm-3 col-md-3"> 
      			<form class="form-inline" action="/action_page.php">
            		<input class="form-control-sm input-sm buscar" type="text" placeholder="Search">
            		<button class="btn btn-success" type="submit">Search</button>
         	 	</form>
        </div>
        <div class="col-sm-3 col-md-3">
        
        
       <?php if (is_file("assets/fotosperfil/usuario-".$nombre.".png" )):?>
        <img class="avatar" src="<?=base_url()?>assets/fotosperfil/usuario-<?=$nombre;?>.png">
         <?php  else:?>
         <img class="avatar" src="<?=base_url()?>assets/fotosperfil/noimagen.jpg">
                    <?php endif;?>
         	
        </div>
      
</nav>
 
     
  
 
   
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
                    <form  name="formulario1" action="<?=base_url()?>usuario/Perfil/perfil_usuario" method="post">
					<input type="hidden" name="id" value= "<?= $idusuario;?>">
					<a href='javascript:enviar_formulario()'>Perfil</a>
				  </form> 						
				       		
                  
                      <form  name="formulario2" action="<?=base_url()?>comentario/Comentarios/comentario" method="post">
					<input type="hidden" name="id" value= "<?= $idusuario;?>">
					<a href='javascript:enviar_formulario2()'>Tus comentarios</a>
				  </form> 		
                    <a href='<?=base_url()?>usuario/Cerrar_sesion/cerrar'>Cerrar sesion</a>
                  
                                                        
                    
           </body>
</html>                                
			   	       
             		
                  
      