
 
<!--  <h1>Formulario de insercion</h1>
        <form action="<?=base_url()?>libro/Libros/insertarlibrospost" method="post" enctype="multipart/form-data">
            
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo">
            
            
            <br><br><br>
            
            
            <label for="ano">Año de edicion nuevo:</label>
            <input type="date" name="ano">
            
            <br><br><br>
            
            
            
            <label for="editorial">Editorial nueva:</label>
            <input type="text" name="editorial">
            
             <br><br><br>
            <label for="autor">Autor:</label>
                <input type="text" name="autor">
         
      
           
           
           
            <br><br><br>
              <label for="genero_literario">Genero literario preferido:</label>
        <select name="genero_literario">
            <option value="Ciencia ficcion">Ciencia ficcion</option>
            <option value="Policiaco">Policiaco</option>
            <option value="Novela romantica">Novela romantica</option>
            <option value="Ensayo">Ensayo</option>
            <option value="poesia">Poesia</option>
             <option value="terror">Terror</option>
              <option value="Infantil">Infantil</option>
        </select>
            <br><br><br>
            <label for="ejemplares">Nº de ejemplares:</label>
            <input type="text" name="ejemplares">
           <br><br>
              <label for="ejemplares">Introduce la descricion</label>
           
            <br>
             <textarea rows="10" cols="25" name="descricion"></textarea>
             <br></br>
             <label for="idp-fo">foto</label>
		<input id="idp-fo"   type="file"  name="foto" accept="image/x-png,image/gif,image/jpeg" />
		  <br></br>
            <input type="submit" value="Insertar">
            <button><a href="<?=base_url()?>libro/Libros/panel_administrativo">Atras</a></button>
        </form>
        <br><br><br> -->
    <body class="nuevosLi">
    <h1 class="mx-auto mb-5 tituInser">Inserción de libros</h1>
    
  <div class="card mx-auto insertar" >
                <div class="mx-auto mt-3 tituSecun">
                    <h3 >Datos del libro</h3>
                   
                </div>
                <div class="card-body">
                    <!-- FORMULARIO -->
                    <form  class="form_registr" action="<?=base_url()?>libro/Libros/insertarlibrospost" method="post" enctype="multipart/form-data">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-book"></i></span>
                            </div>
                            <!-- TextBox - Correo -->
                            <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Titulo" required>
                            <span id="tit"></span>
                        </div>
                        
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-calendar" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                               <input style="width:100px; " type="number" id="ano" name="ano" placeholder="año" required><span class="text-white"> /</span>
                            
                             <input style="width:100px; " type="number" id="mes" name="mes" placeholder="mes" required><span class="text-white"> /</span>
                    
                              <input style="width:100px; " type="number" id="dia" name="dia" placeholder="dia" required>
                            <span  id="fe1"></span> <span id="fe2"></span> <span id="fe3"></span>
                            
                        </div>
                         <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-book" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                             <input type="text"  id="editorial" name="editorial" class="form-control" placeholder="Editorial" required>
                             <span id="edi"></span>
                        </div>
                         <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-user" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                             <input type="text" id="autor" name="autor" class="form-control" placeholder="Autor" required>
                             <span id="aut"></span>
                        </div>
                         <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-book" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                             <select name="genero_literario" style="width:310px">
                             <option value="----">Elige un genero_literario</option>
							<option value="Novela negra">Novela negra</option>
							<option value="Historia de la musica">Historia de la musica</option>
							<option value="Poesia">Poesia</option>
							<option value="Ciencia ficcion">Ciencia ficcion</option>
							<option value="Autoayuda">Autoayuda</option>
							<option value="Fantasia">Fantasia</option>
							<option value="Estilo de vida">Estilo de vida</option>
							<option value="Para padres">Para padres</option>
							<option value="Filosofia">Filosofia</option>
							<option value="Humor">Humor</option>
							<option value="Novela literaria">Novela literaria</option>
							<option value="Empresa">Empresa</option>
							<option value="Comic y manga">Comic y manga</option>
							<option value="Autoayuda">Autoayuda</option>
							<option value="Actualiadad">Actualiadad</option>
							<option value="Novela romantica">Novela romantica</option>
							<option value="Novela contemporania">Novela contemporania</option>
							<option value="Poetica actual">Poetica actual</option>
							<option value="Historia">Historia</option>
							<option value="Narrativa">Narrativa</option>
							<option value="Juvenil">Juvenil</option>
							<option value="Novela negra">Novela negra</option>
							<option value="Novela urbana">Novela </option>
							<option value="Novela politica">Novela politica</option>
							<option value="Periodistico">Periodistico</option>
							<option value="Novela">Novela</option>
							<option value="Ficcion">Ficcion</option>
							<option value="Novela picaresca">Novela picaresca</option>
							</select>                             
                        </div>
                          <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-book" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                             <input type="text" id="ejemplares" name="ejemplares" class="form-control" placeholder="Ejemplares" required>
                             <span id="eje"></span>
                        </div>
                                        <label class="mx-auto  text-white" >Introduce la descricion</label>
                                       <textarea rows="10" cols="40" name="descricion"  style="width:350px"></textarea>
                       
                        <input id="idp-fo"  class="text-white" type="file"  name="foto" accept="image/x-png,image/gif,image/jpeg" />
                        <div class="form-group">
                            <!-- Submit - Ingresar -->
                            <input type="submit" onclick="libros();" value="Ingresar" class="btn float-right login_btn btn btn-primary botoninsertar">
                        </div>
                    </form>
                    
              
            </div>
        </div>
  
  <button type="button" class="volver mx-auto" onclick="window.location.href='<?=base_url()?>libro/Libros/panel_administrativo'"> Volver</button>
  
  
  </body>
  
  
  