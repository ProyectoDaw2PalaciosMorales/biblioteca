

<!--   <h1>Formulario de Actualizacion</h1>
        <form action="<?=base_url()?>usuario/Usuarios/actulizarperfilpost" method="post" enctype="multipart/form-data">
             <input type="hidden" name="id" value="<?=$usuario ->id?>">
              
				
			
			
			
         <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?=$usuario -> nombre?>">
        <br><br>
        <label for="primer_apellido">Primer apellido:</label>
        <input type="text" name="primer_apellido"  value="<?=$usuario -> primer_apellido?>">
        <br><br>
        <label for="segundo_apellido">Segundo apellido:</label>
        <input type="text" name="segundo_apellido" value="<?=$usuario -> segundo_apellido?>">
        <br><br>
       
      
    
          
      
        <label for="ano">Año:</label>
        <input " type="text" name="ano" value="<?=$usuario ->fecha_nacimiento?>">
     
         
          
       <br><br>
        <label for="email">Correo electronico:</label>
        <input type="text" name="email" value="<?=$usuario -> email?>" />
        <br><br>
        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" value="<?=$usuario ->telefono?>"/>
        <br><br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" name="password" value="<?=$usuario -> contrasena?>"/>
        <br><br>
        <label for="comprobacion">Confirma su contraseña:</label>
        <input type="password" name="comprobacion" value="<?=$usuario -> confirmar_contrasena?>">
        <br><br>
        <label for="alias">Nombre de usuario</label>
        <input type="text" name="alias" value="<?=$usuario -> alias?>">
        <br>
        <p>foto antigua</p> 
        <?php if ($usuario ->foto!=null):?>
			
				<img src="<?=base_url()?>assets/fotosperfil/usuario-<?=
				$usuario -> nombre;?>.<?=
			$usuario -> foto;?>"  width="80" height="80">
		
			<?php  else:?>
	
			<img src="<?=base_url()?>assets/fotosperfil/noimagen.jpg"
					  width="80" height="80">
					 
			<?php endif;?>
			  <br><br>
         <label for="idp-fo">foto</label>
		<input id="idp-fo"   type="file"  name="foto" accept="image/x-png,image/gif,image/jpeg" />
		<br><br>
        <input type="submit" value="actualizar">
              
        </form>
        <br><br><br>
    -->  
       <body class="cuadroActualizar">
        
        <div class="card mx-auto border border-primary mt-3 mb-5" style="max-width:395px;background-color:#00a3d1;opacity:80%;">
                <div class="mx-auto mt-3 mb-3 text-white" style="font-family:Lucida Console, Courier New, monospace;">
                    <h3 class="tituloEditar">Actualizar perfil</h3>
                    
                </div>
                <div class="card-body "style="max-width:395px; margin-top:-25px">
                    <!-- FORMULARIO -->
                   <form class="form_registr" action="<?=base_url()?>usuario/Usuarios/actulizarperfilpost" method="post" enctype="multipart/form-data">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <!-- TextBox - Correo -->
                             <input type="hidden" name="id" value="<?=$usuario ->id?>">
                            <input type="text" name="nombre" class="form-control" value="<?=$usuario ->nombre?>" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-user" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <input type="text" name="primer_apellido" class="form-control" value="<?=$usuario -> primer_apellido?>" required>
                        </div>
                      <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-user" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <input type="text" name="segundo_apellido" class="form-control" value="<?=$usuario -> segundo_apellido?>" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-calendar" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <?php $fecha=explode("/", $usuario ->fecha_nacimiento);?>
                           <input style="width:100px; " type="number" name="ano" value="<?=$fecha[0]?>" required><span class="text-white"> /</span>
                             <input style="width:100px; " type="number" name="mes" value="<?=$fecha[1]?>" required><span class="text-white"> /</span>
                              <input style="width:100px; " type="number" name="dia" value="<?=$fecha[2]?>" required>
                        </div>
                        
                    
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-envelope" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <input type="email" name="email" class="form-control" value="<?=$usuario ->email?>" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-tty" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <input type="text" name="telefono" class="form-control " value="<?=$usuario ->telefono?>" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-key" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <input type="password" name="password" class="form-control" value="" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-key" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <input type="password" name="comprobacion" class="form-control" value="" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-user" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <input type="text" name="alias" class="form-control" value="<?=$usuario ->alias?>" required>
                        </div>
                        <p class="textoFoto">Foto antigua</p> 
        			  <?php 
            $sustitutuirespaciosblancos = str_replace(" ","_",$_SESSION['nombre'])?>
          <?php if (is_file("assets/fotosperfil/usuario-". $sustitutuirespaciosblancos.".png" )):?>
        <img  src="<?=base_url()?>assets/fotosperfil/usuario-<?= $sustitutuirespaciosblancos?>.png"style="height: 100px;width: auto;">
         <?php  else:?>
         <img src="<?=base_url()?>assets/fotosperfil/noimagen.jpg"style="height: 100px;width: auto;">
                    <?php endif;?>
      
        
                    
			  <br><br>
        
		<input class="text-white"  id="idp-fo" type="file"  name="foto" accept="image/x-png,image/gif,image/jpeg" />
                        <div class="form-group">
                            <!-- Submit - Ingresar -->
                            <input type="submit" value="Actualizar" class="boton_actualizar float-right login_btn">
                        </div>
                    </form>
                    <!-- FORMULARIO -->
                </div>
                
            </div>
    </body>
