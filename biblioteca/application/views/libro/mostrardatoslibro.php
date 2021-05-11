<?php
?>
  <p> <?=$libro -> id?> </p>
  <br>
   <p> <?=$libro -> titulo?> </p>
    <br>
   <p> <?=$libro -> autor?> </p>
   <br>
   <?php if ($libro ->foto!=null):?>

   <img  src="<?=base_url()?>assets/fotoslibros/<?=$libro -> titulo;?>.<?=$libro -> foto;?>"
					  style="width:15%">
				<?php  else:?>
	<img  src="<?=base_url()?>assets/fotoslibros/nodisponible.jpg"
					  style="width:15%">
			
					 
			<?php endif;?>	  
   
   <br>
      <form action="<?=base_url()?>libro/Libros/reserva" method="post">
		        <input type="hidden" name="id" value="<?=($libro->id)?>">
		        <input type="hidden" name="id_usuario" value="<?=$usuario->id?>">
		              <input type="hidden" name="titulo" value="<?=($libro->titulo)?>">
				
					<input type="hidden" name="cantidad" value="<?=($libro->ejemplares)?>">
					
				  <button onclick="submit()">
					<p>Reserva</p>
							
				 </button>				
				
			</form>    	        	     
		     
		  
			
   <a href="<?=base_url()?>libro/Libros/mostrarlibrosusuarios">atras</a>