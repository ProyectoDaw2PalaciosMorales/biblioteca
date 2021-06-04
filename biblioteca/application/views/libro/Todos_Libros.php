
 <?php foreach ($libros as $libro): ?>
<div class="card cuerpo mb-3 mx-auto" style=" background: #eee;">
  <div class="row ">
    <div class="col-md-3 offset-md-3 mx-auto">
      <?php if ($libro ->foto!=null):?>
 <?php 
 $sustitutuirespaciosblancos = str_replace(" ","_",$libro->titulo)?>
  <form action="<?=base_url()?>libro/Libros/mostrarlibrosampliacion" method="post" >
				<input type="hidden" name="id" value="<?=$libro->id?>">
				
				 
					<img onclick="submit()" class="card-img mx-auto" src="<?=base_url()?>assets/fotoslibros/<?=$sustitutuirespaciosblancos?>.<?=$libro -> foto;?>"
					  style="width:50%;">
						
				 			
				
			</form>    	     
   
				<?php  else:?>
	<img class="card-img mx-auto" src="<?=base_url()?>assets/fotoslibros/nodisponible.jpg"
					  style="width:50%">
			
					 
			<?php endif;?>	  

    </div>
    <div class="col-md-8">
      <div class="card-body titulo_libro">
        <h4 class="card-title"><?=$libro->titulo?></h4>
       <?php if ($libro ->descricion!=null):?>
        <?php 
        $resumendescricion = explode(".", $libro ->descricion);?>

      <p class="card-text"><?= $resumendescricion[0]?></p>
      	<?php  else:?>
      	 <p class="card-text">no hay descricion disponible </p>
      	<?php endif;?>	
      	 <form action="<?=base_url()?>libro/Libros/mostrarlibrosampliacion" method="post" >
				<input type="hidden" name="id" value="<?=$libro->id?>" />
				
				  <input type="button" class="boton3 stretched-link" onclick="submit()" value="Ver mas">
				
			</form>    	     
        
      </div>
    </div>
  </div>
</div>
 			
		<?php endforeach;?>
 