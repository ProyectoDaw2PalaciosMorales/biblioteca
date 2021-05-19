<body style=" font-family: 'open sans';overflow-x: hidden;">
	<div class="container">
		<div class="card" style=" margin-top: 50px;background: #eee; padding: 3em;line-height: 1.5em;">
			<div class="container-fliud">
				<div class="row" style="display: flex;">
					<div class="col-sm" style=" flex-grow: 1;  overflow: hidden;">
						<?php if ($libro ->foto!=null):?>
                		<?php $sustitutuirespaciosblancos = str_replace(" ","_",$libro->titulo)?>
                  		<img class="card-img mx-auto" style="height: 500px;width: auto;"  src="<?=base_url()?>assets/fotoslibros/<?=$sustitutuirespaciosblancos?>.<?=$libro -> foto;?>"/>
                        <?php  else:?>
                  		<img  width= "100%" src="<?=base_url()?>assets/fotoslibros/nodisponible.jpg"/>
                      	<?php endif;?>	  
					</div>
					<div class=" col-sm">
              			<h3 class="product-title" style="text-transform: UPPERCASE; font-weight: bold;  margin-bottom: 15px;  margin-top: 0;"><?=$libro -> titulo?> ,  <?=$libro -> autor?></h3>
              			<p style="margin-bottom: 15px;"> <?=$libro -> descricion?></p>
						<form action="<?=base_url()?>libro/Libros/reserva" method="post">
							<input type="hidden" name="id" value="<?=$libro->id?>">
							<?php if (isset( $_SESSION['nombre'])!=null):?>  
							<input type="hidden" name="id_usuario" value="<?=$_SESSION['idusuario']?>">
							<?php  else:?>
							<?php endif;?>
							<input type="hidden" name="titulo" value="<?=$libro->titulo?>">
						
							<input type="hidden" name="cantidad" value="<?=$libro->ejemplares?>">
							
						  <?php if (isset( $_SESSION['nombre'])!=null):?>  
						  
							<button class="btn btn-primary" onclick="submit()">Reserva</button>	
							<?php  else:?>
							<?php endif;?>
						</form>
						
							
	  						
	<form action="<?=base_url()?>libro/Libros/confirmacion" method="post">	
	<input type="hidden" name="id" value="<?=$libro->id?>">				
<input type="submit" name="confirmar" value="confirmar">
</form>	
				 
							
						
            		</div>
						
				</div>
			</div>
		</div>
	</div>
</body>
<button type="button" class="btn btn-dark" onclick="window.location.href='<?=base_url()?>libro/Libros/mostrarlibrosusuarios'"> Volver</button>
 