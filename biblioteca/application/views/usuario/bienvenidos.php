
  
     
	    
 
  
 
   
            <h1 style='text-align:center;'>Bienvenid@ "<?=$usuario -> nombre?>", Magneto te saluda"</h1>
            
           
                
              <br><br>
              
                   
                    <?php if ($usuario -> nombre=="admin"):?>
                    <a href='<?=base_url()?>usuario/Usuarios/mostrar'>Nuestros usuarios</a>
                    <br><br>
                              
                    
                    <a href='<?=base_url()?>libro/Libros/panel_administrativo'>Administrar libros</a>
                    <br><br>
                    <?php  else:?>
                    <?php endif;?>
                     <a href='<?=base_url()?>libro/Libros/mostrarlibrosusuarios'>Mostrar libros</a>
                       <br><br>
                    <a href='<?=base_url()?>autor/Autores/autor'>Elija un autor para ver sus obras</a>
                    <br><br>
                    <a href='<?=base_url()?>libro/Libros/genero'>Tus genereros favoritos</a>
                    <br><br>
            	
				       		
                  
                      <form  name="formulario2" action="<?=base_url()?>comentario/Comentarios/comentario" method="post">
					<input type="hidden" name="id" value= "<?=$usuario -> nombre?>">
					<a href='javascript:enviar_formulario2()'>Tus comentarios</a>
				  </form> 		
                    
                  
                                                        
        
             		
      
      
