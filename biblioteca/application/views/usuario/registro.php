
<!--      <h1 id="titulo">Bienvenido a nuestra biblioteca</h1>
    
    
  <form class="form_registr" action="<?=base_url()?>usuario/Usuarios/registropost" method="post" enctype="multipart/form-data">
        <h3>Si quieres registrarte rellena los siguientes campos</h3>
        <br><br>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <br><br>
        <label for="primer_apellido">Primer apellido:</label>
        <input type="text" name="primer_apellido" required>
        <br><br>
        <label for="segundo_apellido">Segundo apellido:</label>
        <input type="text" name="segundo_apellido" required>
        <br><br>
        <label for="ano">Año:</label>
        <input style="width:35px; " type="text" name="ano" required><span> /</span>
     
         <label for="mes">Mes:</label>
         <input style="width:35px;"type="text" name="mes" required><span> /</span>
         
          <label for="dia">Dia:</label>
          <input style="width:35px; "type="text" name="dia" required>
          
       <br><br>
        <label for="email">Correo electronico:</label>
        <input type="text" name="email" required>
        <br><br>
        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" required>
        <br><br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" name="password" required>
        <br><br>
        <label for="comprobacion">Confirma su contraseña:</label>
        <input for="password" name="comprobacion" required>
        <br><br>
        <label for="alias">Nombre de usuario</label>
        <input type="text" name="alias" required>
        <br><br>
         <label for="idp-fo">foto</label>
		<input id="idp-fo"   type="file"  name="foto" accept="image/x-png,image/gif,image/jpeg" />
        <input type="submit" value="Registrar">
        
        <br><br>
        
       
    </form>
    <br><br> --> 
    
    <html>
    <head>
        <title>Tu bibioteca</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
         <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/estilos.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
        
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	</head>
  	
  	<body style=background-image:url(../../assets/imagenes/registro_1.jpg);background-repeat:no-repeat;background-size:cover;>
  	
  	<nav class="navbar navbar-expand-md  navbar-dark p-1 mb-5" style="background-color:#00a3d1; opacity: 80%;">

 <div class="navbar-header mx-auto" style="font-family:'Pattaya', sans-serif;">
 
      <a class="navbar-brand" style="font-size: 40px; opacity: 100%"; href='<?=base_url()?>'>TuBiblioteca</a>
    </div>
  
  
</nav>
     <h3 class="mx-auto mt-1 text-white mb-5" style="font-family:Times New Roman, Times, serif; text-align:center;">Bienvenido a tu  biblioteca</h3>
    
    <div class="card mx-auto" style="max-width:410px; opacity:75%; background-color:#fc9e49; border-radius:25px ">
                <div class="mx-auto mt-3 mb-3 text-white " style="font-family:Times New Roman, Times, serif;">
                    <h3 style="">Registro</h3>
                    
                </div>
                <div class="card-body "style="max-width:395px; margin-top:-25px">
                    <!-- FORMULARIO -->
                   <form class="form_registr" action="<?=base_url()?>usuario/Usuarios/registropost" method="post" enctype="multipart/form-data">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <!-- TextBox - Correo -->
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-user" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <input type="text" name="primer_apellido" class="form-control" placeholder="Primer apellido" required>
                        </div>
                      <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-user" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <input type="text" name="segundo_apellido" class="form-control" placeholder="Segundo apellido" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-calendar" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                             <input style="width:100px; " type="number" name="ano" placeholder="0000" required><span class="text-white"> /</span>
                             <input style="width:100px; " type="number" name="mes" placeholder="01" required><span class="text-white"> /</span>
                              <input style="width:100px; " type="number" name="dia" placeholder="01" required>
                        </div>
                        
                    
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-envelope" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-tty" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <input type="text" name="telefono" class="form-control " placeholder="Telefono" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-key" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-key" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <input type="password" name="comprobacion" class="form-control" placeholder="Confirmar contraseña" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-user" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <input type="text" name="alias" class="form-control" placeholder="Alias" required>
                        </div>
                        <input  class="text-white" id="idp-fo"   type="file"  name="foto" accept="image/x-png,image/gif,image/jpeg">
                        <div class="form-group">
                            <!-- Submit - Ingresar -->
                            <input type="submit" value="Registrar" class="btn float-right login_btn btn" style="background-color:#00a3d1; opacity: 100%;font-weight: ;color:white;">
                        </div>
                    </form>
                    <!-- FORMULARIO -->
                </div>
                
            </div>
    
      </body>
         </html>
  
  