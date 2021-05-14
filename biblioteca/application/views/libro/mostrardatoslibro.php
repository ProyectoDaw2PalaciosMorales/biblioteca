<?php
?>
  <p> <?=$libro -> id?> </p>
  <br>
   <p> <?=$libro -> titulo?> </p>
    <br>
   <p> <?=$libro -> autor?> </p>
   <br>
   <?php if ($libro ->foto!=null):?>
<?php 
 $sustitutuirespaciosblancos = str_replace(" ","_",$libro->titulo)?>
   <img class="card-img mx-auto" src="<?=base_url()?>assets/fotoslibros/<?=$sustitutuirespaciosblancos?>.<?=$libro -> foto;?>"
					  style="width:15%">
				<?php  else:?>
	<img  src="<?=base_url()?>assets/fotoslibros/nodisponible.jpg"
					  style="width:15%">
			
					 
			<?php endif;?>	  
   
   <br>
    <p> <?=$libro ->descricion?> </p>
    <br>  	        	     
		     
		  
			
   <a href="<?=base_url()?>libro/Libros/mostrarlibrosusuarios">atras</a>