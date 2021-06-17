
    <html>
    <head>
        <title>Tu biblioteca</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
         <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/estilos.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
        
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<!-- <script src="<?=base_url()?>assets/patrones.js"></script>-->
  	<script>
  	
  	 function 	registro(){


var nombre=document.getElementById("nombre").value.trim();
var apellido1=document.getElementById("primer_apellido").value.trim();
var apellido2=document.getElementById("segundo_apellido").value.trim();
var telf_fijo=document.getElementById("telefono").value.trim();
var correo=document.getElementById("email").value.trim();
var alias=document.getElementById("alias").value.trim();
var fechaano=document.getElementById("ano").value.trim();
var fechames=document.getElementById("mes").value.trim();
var fechadia=document.getElementById("dia").value.trim();password
var contrasena=document.getElementById("password").value.trim();
var conficontrasena=document.getElementById("comprobacion").value.trim();

var patronNombre=/^[a-zA-Záéíóú\-çñ ]{5,15}$/;
var patronalias=/^[a-zA-Záéíóú\-çñ ]{3,15}$/;
var patronApellido=/^[a-zA-Záéíóú\-çñ ]{3,30}$/;
var patronTelfijo=/^[9|8][1-8]{1}[0-9]{3}[0-9]{2}[0-9]{2}$/;
var patronEmail=/^[a-zA-Z0-9çñ_-]{1,30}[@][a-zA-Z]{1,}[.][a-zA-Z]{2,3}/;
var patronano=/^[1-9]{1}[0-9]{3}$/;	

//mínima de 8 letras, con al menos un símbolo, letras mayúsculas y minúsculas y un maximo de 16 letras
var patroncontrasena=/^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$/;



	
if(patronNombre.test(nombre.toLowerCase())){

				
				var nombreOk = true;
		
				
			}else{

document.getElementById("nom").innerHTML="minimo 1 letra solo se permiten letras longitud entre 1 y 10";
			}
			
	

			

			if(patronApellido.test(apellido1.toLowerCase())){

				
				var apellidoUnoOk = true;
			}else{

				document.getElementById("primer").innerHTML="minimo 1 letra solo se permiten letras longitud entre 1 y 30";

			}


			if(patronApellido.test(apellido2.toLowerCase())){

			
				var apellidoDosOk = true;
			}else{


document.getElementById("segundo").innerHTML="minimo 1 letra solo se permiten letras longitud entre 1 y 30";

			}
			
			if(patronano.test(fechaano)){

				
				var anoOk = true;
			}else{

				document.getElementById("fe1").innerHTML="año mal introducido";



			}
			
			if(fechames<13){
				if(fechames>0){
					var mesOk = true;
					
				}
				else{
document.getElementById("fe2").innerHTML="mes mal introducido	longitud de 0 a	12";
	
					}
			}else{

document.getElementById("fe2").innerHTML="mes mal introducido	longitud de 0 a	12";
			}
			if(fechadia<32){
				if(fechadia>0){
					var diaOk = true;
			
				}
				else{
				
document.getElementById("fe3").innerHTML="dia	longitud de 0 a	32";

				}
			}else{
			
document.getElementById("fe3").innerHTML="dia 	longitud de 0 a	32";
			}
			
		if( anoOk == true && mesOk == true && diaOk == true ){
		
				var fechaOk = true;
				
			}	
			
			if(patronEmail.test(correo.trim())){
				
					var correoOk = true;
				}else{

					document.getElementById("em").innerHTML="correo mal introducido";

				}
			
			if(patronTelfijo.test(telf_fijo)){
var telefonoOk = true;
			 	
			 }else{

document.getElementById("tlf").innerHTML="empiza por 9 o 8	 mas 8 numeroa	";

			 }

			
			
			
		if(patroncontrasena.test(contrasena)){

				
				var contrasenaOk = true;
				
			}else{

document.getElementById("con").innerHTML="minimo una letra en minuscula minimo una letra en mayusculas  minimo un numero  miminmo un caracter especial longitud entre 8 y 16";

			}	
			if(patroncontrasena.test(conficontrasena)){

				
				var conficontrasenaOk = true;
				
			}else{

document.getElementById("conf").innerHTML="minimo una letra en minuscula minimo una letra en mayusculas  minimo un numero  miminmo un caracter especial longitud entre 8 y 16";


			}	
			if(patronalias.test(alias.toLowerCase())){

				
				var aliasOk = true;
				
			}else{


document.getElementById("ali").innerHTML="solo se permiten letras como minmo introduce una letra";


			}
			
			if(correoOk ==true	&& 	nombreOk == true && apellidoUnoOk == true && apellidoDosOk == true && fechaOk == true && telefonoOk == true && contrasenaOk == true && conficontrasenaOk == true && aliasOk==true){
			document.getElementById("myForm").submit();
			console.log("funciona")
				
			}
			
		}
		function 	actualizar(){


var nombre=document.getElementById("nombre").value.trim();
var apellido1=document.getElementById("primer_apellido").value.trim();
var apellido2=document.getElementById("segundo_apellido").value.trim();
var telf_fijo=document.getElementById("telefono").value.trim();
var correo=document.getElementById("email").value.trim();
var alias=document.getElementById("alias").value.trim();
var fechaano=document.getElementById("ano").value.trim();
var fechames=document.getElementById("mes").value.trim();
var fechadia=document.getElementById("dia").value.trim();password
var contrasena=document.getElementById("password").value.trim();
var conficontrasena=document.getElementById("comprobacion").value.trim();

var patronNombre=/^[a-zA-Záéíóú\-çñ ]{5,15}$/;
var patronalias=/^[a-zA-Záéíóú\-çñ ]{3,15}$/;
var patronApellido=/^[a-zA-Záéíóú\-çñ ]{3,30}$/;
var patronTelfijo=/^[9|8][1-8]{1}[0-9]{3}[0-9]{2}[0-9]{2}$/;
var patronEmail=/^[a-zA-Z0-9çñ_-]{1,30}[@][a-zA-Z]{1,}[.][a-zA-Z]{2,3}/;
var patronano=/^[1-9]{1}[0-9]{3}$/;	

//mínima de 8 letras, con al menos un símbolo, letras mayúsculas y minúsculas y un maximo de 16 letras
var patroncontresena=/^(?=.?[A-Z])(?=.?[a-z])(?=.?[0-9])(?=.?[^\w\s]).{8,16}$/;



	
if(patronNombre.test(nombre.toLowerCase())){

				
				var nombreOk = true;
		
				
			}else{

document.getElementById("nom").innerHTML="minimo 1 letra solo se permiten letras longitud entre 1 y 10";
			}
			
	

			

			if(patronApellido.test(apellido1.toLowerCase())){

				
				var apellidoUnoOk = true;
			}else{

				document.getElementById("primer").innerHTML="minimo 1 letra solo se permiten letras longitud entre 1 y 30";

			}


			if(patronApellido.test(apellido2.toLowerCase())){

			
				var apellidoDosOk = true;
			}else{


document.getElementById("segundo").innerHTML="minimo 1 letra solo se permiten letras longitud entre 1 y 30";

			}
			
			if(patronano.test(fechaano)){

				
				var anoOk = true;
			}else{

				document.getElementById("fe1").innerHTML="año mal introducido";



			}
			
			if(fechames<13){
				if(fechames>0){
					var mesOk = true;
					
				}
				else{
document.getElementById("fe2").innerHTML="mes mal introducido	longitud de 0 a	12";
	
					}
			}else{

document.getElementById("fe2").innerHTML="mes mal introducido	longitud de 0 a	12";
			}
			if(fechadia<32){
				if(fechadia>0){
					var diaOk = true;
			
				}
				else{
				
document.getElementById("fe3").innerHTML="dia	longitud de 0 a	32";

				}
			}else{
			
document.getElementById("fe3").innerHTML="dia 	longitud de 0 a	32";
			}
			
		if( anoOk == true && mesOk == true && diaOk == true ){
		
				var fechaOk = true;
				
			}	
			
			if(patronEmail.test(correo.trim())){
				
					var correoOk = true;
				}else{

					document.getElementById("em").innerHTML="correo mal introducido";

				}
			
			if(patronTelfijo.test(telf_fijo)){
var telefonoOk = true;
			 	
			 }else{

document.getElementById("tlf").innerHTML="empiza por 9 o 8	 mas 8 numeroa	";

			 }

			
			
			
		if(patroncontrasena.test(contrasena)){

				
				var contrasenaOk = true;
				
			}else{

document.getElementById("con").innerHTML="minimo una letra en minuscula minimo una letra en mayusculas  minimo un numero  miminmo un caracter especial longitud entre 8 y 16";

			}	
			if(patroncontresena.test(conficontrasena)){

				
				var conficontrasenaOk = true;
				
			}else{

document.getElementById("conf").innerHTML="minimo una letra en minuscula minimo una letra en mayusculas  minimo un numero  miminmo un caracter especial longitud entre 8 y 16";


			}	
			if(patronalias.test(alias.toLowerCase())){

				
				var aliasOk = true;
				
			}else{


document.getElementById("ali").innerHTML="solo se permiten letras como minmo introduce una letra";


			}
			
			if(correoOk ==true	&& 	nombreOk == true && apellidoUnoOk == true && apellidoDosOk == true && fechaOk == true && telefonoOk == true && contrasenaOk == true && conficontrasenaOk == true && aliasOk==true){
			document.formulario.submit();
				
			}}
			
			
/*		function 	libros(){


var titulo=	document.getElementById("titulo").value.trim();
var editorial=document.getElementById("editorial").value.trim();
var autor=document.getElementById("autor").value.trim();
var ejemplares=document.getElementById("ejemplares").value.trim();
var fechaano=document.getElementById("ano").value.trim();
var fechames=document.getElementById("mes").value.trim();
var fechadia=document.getElementById("dia").value.trim();

var patronNombre=/^[a-zA-Záéíóú\-çñ ]{1,10}$/;
var patroneje=/^[0-9]{1,99}$/;



var patronano=/^[1-9]{1}[0-9]{3}$/;	




	
if(patronNombre.test(titulo.toLowerCase())){

				
				var tituloOk = true;
		
				
			}else{

document.getElementById("tit").innerHTML="minimo 1 letra solo se permiten letras longitud entre 1 y 10";
			}
			
	
if(patronNombre.test(editorial.toLowerCase())){

				
				var 	editorialOk = true;
		
				
			}else{

document.getElementById("edi").innerHTML="minimo 1 letra solo se permiten letras longitud entre 1 y 10";
			}
			
			if(patronNombre.test(autor.toLowerCase())){

				
				var autorOk = true;
		
				
			}else{

document.getElementById("aut").innerHTML="minimo 1 letra solo se permiten letras longitud entre 1 y 10";
			}
			if(patroneje.test(ejemplares.toLowerCase())){

				
				var 	ejemplaresOk = true;
		
				
			}else{

document.getElementById("eje").innerHTML="solo	numeros	";
			}
			
			if(patronano.test(fechaano)){

				
				var anoOk = true;
			}else{

				document.getElementById("fe1").innerHTML="año mal introducido";



			}
			
			if(fechames<13){
				if(fechames>0){
					var mesOk = true;
					
				}
				else{
document.getElementById("fe2").innerHTML="mes mal introducido	longitud de 0 a	12";
	
					}
			}else{

document.getElementById("fe2").innerHTML="mes mal introducido	longitud de 0 a	12";
			}
			if(fechadia<32){
				if(fechadia>0){
					var diaOk = true;
			
				}
				else{
				
document.getElementById("fe3").innerHTML="dia	longitud de 0 a	32";

				}
			}else{
			
document.getElementById("fe3").innerHTML="dia 	longitud de 0 a	32";
			}
			
		if( anoOk == true && mesOk == true && diaOk == true ){
		
				var fechaOk = true;
				
			}	
			
			
			
			if( tituloOk == true &&  fechaOk == true && editorialOk == true && autorOk == true && 	ejemplaresOk == true ){
			document.formulario.submit();
				
			}	}
			
			
				
		function 	librosactu(){


var titulo=	document.getElementById("titulo").value.trim();
var editorial=document.getElementById("editorial").value.trim();
var autor=document.getElementById("autor").value.trim();
var ejemplares=document.getElementById("ejemplares").value.trim();
var fechaano=document.getElementById("ano").value.trim();
var fechames=document.getElementById("mes").value.trim();
var fechadia=document.getElementById("dia").value.trim();

var patronNombre=/^[a-zA-Záéíóú\-çñ ]{1,10}$/;
var patroneje=/^[0-9]{1,99}$/;



var patronano=/^[1-9]{1}[0-9]{3}$/;	




	
if(patronNombre.test(titulo.toLowerCase())){

				
				var tituloOk = true;
		
				
			}else{

document.getElementById("tit").innerHTML="minimo 1 letra solo se permiten letras longitud entre 1 y 10";
			}
			
	
if(patronNombre.test(editorial.toLowerCase())){

				
				var 	editorialOk = true;
		
				
			}else{

document.getElementById("edi").innerHTML="minimo 1 letra solo se permiten letras longitud entre 1 y 10";
			}
			
			if(patronNombre.test(autor.toLowerCase())){

				
				var autorOk = true;
		
				
			}else{

document.getElementById("aut").innerHTML="minimo 1 letra solo se permiten letras longitud entre 1 y 10";
			}
			if(patroneje.test(ejemplares.toLowerCase())){

				
				var 	ejemplaresOk = true;
		
				
			}else{

document.getElementById("eje").innerHTML="solo	numeros	";
			}
			
			if(patronano.test(fechaano)){

				
				var anoOk = true;
			}else{

				document.getElementById("fe1").innerHTML="año mal introducido";



			}
			
			if(fechames<13){
				if(fechames>0){
					var mesOk = true;
					
				}
				else{
document.getElementById("fe2").innerHTML="mes mal introducido	longitud de 0 a	12";
	
					}
			}else{

document.getElementById("fe2").innerHTML="mes mal introducido	longitud de 0 a	12";
			}
			if(fechadia<32){
				if(fechadia>0){
					var diaOk = true;
			
				}
				else{
				
document.getElementById("fe3").innerHTML="dia	longitud de 0 a	32";

				}
			}else{
			
document.getElementById("fe3").innerHTML="dia 	longitud de 0 a	32";
			}
			
		if( anoOk == true && mesOk == true && diaOk == true ){
		
				var fechaOk = true;
				
			}	
			
			
			
			if( tituloOk == true &&  fechaOk == true && editorialOk == true && autorOk == true && 	ejemplaresOk == true ){
			document.formulario.submit();
				
			}	
			
	
			
		}
				
	*/		
		
		
		
		

		
  	
  	
  	
  	</script>
  	</head>
  	
  	<body style=background-image:url(../../assets/imagenes/registro_1.jpg);background-repeat:no-repeat;background-size:cover;>
  	
  	<nav class="navbar navbar-expand-md  navbar-dark p-1 mb-5" style="background-color:#00a3d1; opacity: 80%;">

 <div class="navbar-header mx-auto" style="font-family:'Pattaya', sans-serif;">
 
      <a class="navbar-brand" style="font-size: 40px; opacity: 100%"; href='<?=base_url()?>'>TuBiblioteca</a>
    </div>
  
  
</nav>
     <h3 class="mx-auto mt-1 text-white mb-5" style="font-family:Times New Roman, Times, serif; text-align:center;">Bienvenido a tu  biblioteca</h3>
    
    <div class="card mx-auto" style="max-width:410px; opacity:85%; background-color:#fc9e49; border-radius:25px ">
                <div class="mx-auto mt-3 text-white " style="font-family:Times New Roman, Times, serif;">
                    <h3 style="">Registro</h3>
                    
                </div>
                <div class="card-body  "style="max-width:395px; margin-top:-25px">
                    <!-- FORMULARIO -->
                   <form class="form_registr" id="myForm" action="<?=base_url()?>usuario/Usuarios/registropost" method="post" enctype="multipart/form-data">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <!-- TextBox - Correo -->
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required>
                            <span id="nom"></span>
                            
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-user" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <input type="text" id="primer_apellido" name="primer_apellido" class="form-control" placeholder="Primer apellido" required>
                              <span id="primer"></span>
                        </div>
                      <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-user" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <input type="text" id="segundo_apellido" name="segundo_apellido" class="form-control" placeholder="Segundo apellido" required>
                              <span id="segundo"></span>
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
                                <span class="input-group-text"><i class="fa fa-envelope" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                           <span id="em"></span>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-tty" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <input type="text" id="telefono" name="telefono" class="form-control " placeholder="Telefono" required>
                              <span id="tlf"></span>
                            
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-key" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required>
                            
                              <span id="con"></span>
                        </div>
                        
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-key" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <input type="password" id="comprobacion" name="comprobacion" class="form-control" placeholder="Confirmar contraseña" required>
                              <span id="conf"></span>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend" style="background-color: #00BDF7">
                                <span class="input-group-text"><i class="fa fa-user" ></i></span>
                            </div>
                            <!-- TextBox - Contraseña -->
                            <input type="text" id="alias" name="alias" class="form-control" placeholder="Alias" required>
                               <span id="ali"></span>
                        </div>
                        <input  class="text-white" id="idp-fo"   type="file"  name="foto" accept="image/x-png,image/gif,image/jpeg">
                        <div class="form-group">
                            <!-- Submit - Ingresar -->
                             <input type="button" onclick="registro()"; value="Registrar" class="btn float-right login_btn btn" style="background-color:#00a3d1; opacity: 100%;font-weight: ;color:white;"> 
                        </div>
                    </form>
                    <!-- FORMULARIO -->
                </div>
                
            </div>
  
      </body>
         </html>