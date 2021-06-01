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
  	
  	<body style=background-image:url(../../assets/imagenes/login_libros12.jpg);background-repeat:no-repeat;background-size:cover;>
  	
  	<nav class="navbar navbar-expand-md navbar-dark p-1" style="background-color:#00a3d1; opacity: 80%;">

 <div class="navbar-header mx-auto" style="font-family:'Pattaya', sans-serif;">
 
      <a class="navbar-brand" style="font-size: 40px"; href='<?=base_url()?>'>TuBiblioteca</a>
    </div>
  
  
</nav>

  	

<div class="card mx-auto" style="max-width:319px; margin-top:150px; background-color:#00a3d1; opacity: 90%;">
                <div class="mx-auto mt-3 text-white" style="font-family:Times New Roman, Times, serif;">
                    <h2>Iniciar sesion</h2>
                    
                </div>
                <div class="card-body" style="opacity: 100%;">
                    <!-- FORMULARIO -->
                    <form action="<?=base_url()?>usuario/Usuarios/acceso" method="post">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <!-- TextBox - Correo -->
                            <input type="text" name="usuario" class="form-control" placeholder="Usuario">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-key" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <input type="password" name="password" class="form-control" placeholder="Contraseña">
                        </div>
                        <div class="row align-items-center remember text-white">
                            <input type="checkbox">Recuerdame
                        </div>
                        <div class="form-group">
                            <!-- Submit - Ingresar -->
                            <input type="submit" value="Ingresar" class="btn float-right login_btn btn btn-primary">
                        </div>
                    </form>
                    <!-- FORMULARIO -->
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links text-white">
                        ¿No tienes una cuenta?<a class="text-white" href="<?=base_url()?>usuario/Usuarios/registro">Registrate</a>
                    </div>
                    <div class="d-flex justify-content-center links text-white">
                        <a class="text-white" href="<?=base_url()?>usuario/Usuarios/recuperarcontrasena">¿Olvidaste tu contraseña?</a>
                    </div>
                    <div class="d-flex justify-content-center links text-white">
                        <!--<span>El usuario o la contraseña es incorrecto</span>-->
                    </div>
                </div>
            </div>
            </body>
         </html>
        