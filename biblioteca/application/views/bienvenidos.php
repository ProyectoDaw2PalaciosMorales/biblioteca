<?php

$nombre= $_SESSION['nombre'];

$idusuario=$_SESSION['idperfil'];

?>

<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
    
     <body>
  
 
   
            <h1 style='text-align:center;'>Bienvenid@ "<?= $nombre; ?>", Magneto te saluda"</h1>
            
           
                
              <br><br>
                   
                    <?php if ($nombre=="admin"):?>
                    <a href='<?=base_url()?>Administrar_Usuarios/usuarios'>Nuestros usuarios</a>
                    <br><br>
                              
                    
                    <a href='<?=base_url()?>/Administrador_libros/panel_administrativo'>Administrar libros</a>
                    <br><br>
                    <?php  else:?>
                    <?php endif;?>
                     <a href='<?=base_url()?>/Mostrarlibros/mostrarusuario'>Mostrar libros</a>
                       <br><br>
                    <a href='<?=base_url()?>/Autores/autor'>Elija un autor para ver sus obras</a>
                    <br><br>
                    <a href='<?=base_url()?>/Generos/genero'>Tus genereros favoritos</a>
                    <br><br>
                    <form  name="formulario1" action="<?=base_url()?>/Perfil/perfil_usuario" method="post">
					<input type="hidden" name="id" value= "<?= $idusuario;?>">
					<a href='javascript:enviar_formulario()'>Perfil</a>
				  </form> 						
				       		
                  
                      <form  name="formulario2" action="<?=base_url()?>/Comentarios/comentario" method="post">
					<input type="hidden" name="id" value= "<?= $idusuario;?>">
					<a href='javascript:enviar_formulario2()'>Tus comentarios</a>
				  </form> 		
                    <a href='<?=base_url()?>/Cerrar_sesion/cerrar'>Cerrar sesion</a>
                  
                                                        
                    
           </body>
</html>                                
			   	       
             		
                  
      