


	<!--  hacer cards -->
		
  
<div class="row row-cols-1 row-cols-md-3 g-4">
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
    
          <?php 
          $url=base_url()."libro/Libros/panel_administrativo";
         // header('refresh:30; url='.$url);?>
   <a href="<?=base_url()?>usuario/Usuarios/acceso">HOME</a>
   
  