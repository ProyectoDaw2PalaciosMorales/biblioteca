<!--   <h1>Formulario de Actualizacion</h1>
        <form action="<?=base_url()?>libro/Libros/actualizarpost" method="post" enctype="multipart/form-data">
          
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" value="<?=$libro -> titulo?>">
			
			
            
            
            <br><br><br>
            
             <input type="hidden" name="id" value="<?=$libro ->id?>">
            <label for="ano">Año de edicion nuevo:</label>
            <input type="date" name="ano" value="<?=$libro ->ano_edicion?>">
            
            <br><br><br>
            
            
            
            <label for="editorial">Editorial nueva:</label>
            <input type="text" name="editorial" value="<?=$libro ->editorial?>">
            
            
            <br><br><br>
               
            
            <label for="autor">Autor:</label>
            
            
        <input type="text" name="autor" value="<?=$libro ->autor?>">
           
                <br><br><br>
                      <label for="genero_literario">Genero literario preferido:</label>
        <select name="genero_literario">
        <option  select value="<?=$libro->genero_literario?>"><?=$libro->genero_literario?></option>
       <?php foreach ($generos as $genero):?>
     
           <?php if ($genero!= $libro->genero_literario):?>
		<option   value="<?=$genero?>"><?=$genero?></option>
		<?php endif;?>
		
		<?php endforeach;?>
		
     </select>
           
                
        
        <br><br><br>
            <label for="ejemplares">Nº de ejemplares:</label>
            <input type="text" name="ejemplares" value="<?=$libro ->ejemplares?>" >
            <br><br>
              <label for="ejemplares">Introduce la descricion</label>
           
            <br>
             <textarea rows="10" cols="25" name="descricion"><?=$libro ->descricion?></textarea>
               <br></br>
             <label for="idp-fo">foto</label>
		<input id="idp-fo"   type="file"  name="foto" accept="image/x-png,image/gif,image/jpeg" />
		  <br></br>
             
            <input type="submit" value="Actualizar">
           <button> <a href="<?=base_url()?>libro/Libros/mostrar_libros">Volver a la tabla</a> </button>
            <br><br>
            <a href="<?=base_url()?>libro/Libros/panel_administrativo">&ltAtras</a>  
              
        </form>
        <br><br><br>
   
  -->
  
  <div class="card mx-auto border border-primary bg-dark" style="max-width:395px; margin-top:25px">
                <div class="mx-auto mt-3 text-white" style="font-family:Lucida Console, Courier New, monospace;">
                    <h3 >Actuailizar libros</h3>
                   
                </div>
                <div class="card-body">
                    <!-- FORMULARIO -->
                   <form action="<?=base_url()?>libro/Libros/actualizarpost" method="post" enctype="multipart/form-data">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-book"></i></span>
                            </div>
                            <!-- TextBox - Correo -->
                            <input type="hidden" name="id" value="<?=$libro ->id?>">
                            <input type="text" name="titulo" class="form-control" placeholder="<?=$libro -> titulo?>" required>
                        </div>
                        
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-calendar" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                             <input type="date" name="ano" class="form-control" placeholder="<?=$libro ->ano_edicion?>" required>
                        </div>
                         <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-book" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                             <input type="text" name="editorial" class="form-control" placeholder="<?=$libro -> editorial?>" required>
                        </div>
                         <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-user" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                             <input type="text" name="autor" class="form-control" placeholder="<?=$libro -> autor?>" required>
                        </div>
                         <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-book" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                             <select name="genero_literario">
        					<option  select value="<?=$libro->genero_literario?>"><?=$libro->genero_literario?></option>
       						<?php foreach ($generos as $genero):?>
     
           					<?php if ($genero!= $libro->genero_literario):?>
							<option   value="<?=$genero?>"><?=$genero?></option>
						<?php endif;?>
		
						<?php endforeach;?>
		
     					</select>
                        </div>
                          <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-book" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                             <input type="text" name="ejemplares" class="form-control" placeholder="<?=$libro ->ejemplares?>" required>
                        </div>
                                        <label class="mx-auto  text-white" >Introduce la descricion</label>
                                       <textarea rows="10" cols="40" name="descricion"  style="width:350px"><?=$libro ->descricion?></textarea>
                       
                       <p class="mx-auto  text-white">foto antigua</p> 
                       <?php if ($libro ->foto!=null):?>
        				<?php $sustitutuirespaciosblancos = str_replace(" ","_",$libro->titulo)?>
                  		<img class="card-img mx-auto" style="height: 100px;width: auto;"  src="<?=base_url()?>assets/fotoslibros/<?=$sustitutuirespaciosblancos?>.<?=$libro -> foto;?>"/>
                        <?php  else:?>
                  		<img  style="height: 100px;width: auto;"  src="<?=base_url()?>assets/fotoslibros/nodisponible.jpg"/>
                      	<?php endif;?>	  
						<input id="idp-fo"   type="file"  name="foto" accept="image/x-png,image/gif,image/jpeg" />
                       
                       
                       
                       
                       
                       
                       
                        
                        <div class="form-group">
                            <!-- Submit - Ingresar -->
                            <input type="submit" value="actualizar" class="btn float-right login_btn btn btn-primary">
                        </div>
                        
                    </form>
                    
                
            </div>
            
            </div>
            
      <button> <a href="<?=base_url()?>libro/Libros/mostrar_libros">Volver a la tabla</a> </button>
            <br><br>
            <a href="<?=base_url()?>libro/Libros/panel_administrativo">&ltAtras</a>     
   
  