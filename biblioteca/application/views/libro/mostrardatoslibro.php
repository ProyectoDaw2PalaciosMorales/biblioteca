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
   <a href="<?=base_url()?>libro/Libros/mostrarlibrosusuarios">atras</a>