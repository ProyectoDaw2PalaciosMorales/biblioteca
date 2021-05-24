<!--<h1 style='text-align:center;'>Bienvenid@ "<?=$usuario -> nombre?>", Magneto te saluda"</h1>
            
           
                
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
                    
 -->                                                             
   
	

   
  
    

   <div class="row ">
   
    <div class="col col-lg-2 "style="text-align:center;  background-color:#C0C0C0;">
     <br>
     <?php if ($usuario -> nombre=="admin"):?>
    				
                    <a	class=" text-white"href='<?=base_url()?>usuario/Usuarios/mostrar'>Nuestros usuarios</a>
                     <br> <br> <br>
                              
                    
                    <a	class=" text-white" href='<?=base_url()?>libro/Libros/panel_administrativo'>Administrar libros</a>
                       <br> <br> <br>
                    <?php  else:?>
                    <?php endif;?>
                    
                     <a class="  text-white"href='<?=base_url()?>libro/Libros/mostrarlibrosusuarios'>Mostrar libros</a>
                          <br> <br> <br>
                    <a 	class=" text-white"	href='<?=base_url()?>autor/Autores/autor'>Elija un autor para ver sus obras</a>
                        <br> <br> <br>
                    <a	class=" text-white" href='<?=base_url()?>libro/Libros/genero'>Tus genereros favoritos</a>
                        <br> <br> <br>
            	
				       		
                  
                      <form  name="formulario2" action="<?=base_url()?>comentario/Comentarios/comentario" method="post">
					<input type="hidden" name="id" value= "<?=$usuario -> nombre?>">
					<a class=" text-white"href='javascript:enviar_formulario2()'>Tus comentarios</a>
				  </form> 		
    </div>
    <div class="col col-lg-9 p-0"   >
     <?php if ($usuario -> nombre=="admin"):?>
   	<img  src="<?=base_url()?>assets/imagenes/edificio.jpg" style="width:120%; height:100%;">
   	   <?php  else:?>
    <img  src="<?=base_url()?>assets/imagenes/edificionoadmin.jpg" style="width:120%; height:100%;"> 
     <?php endif;?>               
    </div>
    </div>
  
     		
      
      
