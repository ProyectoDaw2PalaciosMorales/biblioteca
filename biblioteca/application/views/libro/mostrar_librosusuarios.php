


	<!--  hacer cards -->
		
  
<div class="row row-cols-1 row-cols-md-3 g-4">
<?php foreach ($libros as $libro): ?>
		

 
  <div class="col ">
    <div class="card h-100 border border-primary text-center  " >

   <img class="card-img mx-auto " src="<?=base_url()?>assets/fotoslibros/Espuma.jpg"
					  style="width:50%">
				  
      <div class="card-body">
      <h4 class="card-title"><?=$libro->titulo?></h4>
      <p class="card-text">descricion</p>
      <a href="#" class="btn btn-primary stretched-link">Ver mas</a>
    </div>
    </div>
  </div>
  
    		
				
		         
		
			
					
		<?php endforeach;?>

</div>
    
          <?php 
          $url=base_url()."libro/Libros/panel_administrativo";
         // header('refresh:30; url='.$url);?>
   <a href="<?=base_url()?>usuario/Usuarios/acceso">HOME</a>
   
  