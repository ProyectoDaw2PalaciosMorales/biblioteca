


	<!--  hacer cards -->
		
  <?php foreach ($libros as $libro): ?>
<div class="card mb-3 mx-auto" style="width:80%">
  <div class="row ">
    <div class="col-md-3 offset-md-3 mx-auto">
      <?php if ($libro ->foto!=null):?>

   <img class="card-img mx-auto" src="<?=base_url()?>assets/fotoslibros/<?=$libro -> titulo;?>.<?=$libro -> foto;?>"
					  style="width:50%">
				<?php  else:?>
	<img class="card-img mx-auto" src="<?=base_url()?>assets/fotoslibros/nodisponible.jpg"
					  style="width:50%">
			
					 
			<?php endif;?>	  

    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?=$libro->titulo?></h5>
       <?php if ($libro ->descricion!=null):?>
        <?php 
        $resumendescricion = explode(".", $libro ->descricion);?>

      <p class="card-text"><?= $resumendescricion[0]?></p>
      	<?php  else:?>
      	 <p class="card-text">no hay descricion disponible </p>
      	<?php endif;?>	
      	 <form action="<?=base_url()?>libro/Libros/mostrarlibrosampliacion" method="post">
				<input type="hidden" name="id" value="<?=$libro->id?>">
				
				  <button class="btn btn-primary stretched-link" onclick="submit()">
					Ver mas
						
				 </button>				
				
			</form>    	     
        
      </div>
    </div>
  </div>
</div>
 			
		<?php endforeach;?>
 
 
  
<!--  <div class="row row-cols-1 row-cols-md-3 g-4">
<?php foreach ($libros as $libro): ?>
		

 
  <div class="col ">
    <div class="card h-100 border border-primary text-center  " >
<?php if ($libro ->foto!=null):?>

   <img class="card-img mx-auto" src="<?=base_url()?>assets/fotoslibros/<?=$libro -> titulo;?>.<?=$libro -> foto;?>"
					  style="width:50%">
				<?php  else:?>
	<img class="card-img mx-auto" src="<?=base_url()?>assets/fotoslibros/nodisponible.jpg"
					  style="width:50%">
			
					 
			<?php endif;?>	  
      <div class="card-body">
      <h4 class="card-title"><?=$libro->titulo?></h4>
      <?php if ($libro ->descricion!=null):?>
      <p class="card-text"><?=$libro->descricion?></p>
      	<?php  else:?>
      	 <p class="card-text">no hay descricion disponible</p>
      	<?php endif;?>	
      	 <form action="<?=base_url()?>libro/Libros/mostrarlibrosampliacion" method="post">
				<input type="hidden" name="id" value="<?=$libro->id?>">
				
				  <button class="btn btn-primary stretched-link" onclick="submit()">
					Ver mas
						
				 </button>				
				
			</form>    	     
      
    </div>
    </div>
  </div>
  
    		
				
		         
		
			
					
		<?php endforeach;?>

</div>
   --> 
          <?php 
          $url=base_url()."libro/Libros/panel_administrativo";
         // header('refresh:30; url='.$url);?>
   <a href="<?=base_url()?>usuario/Usuarios/acceso">HOME</a>
   
  