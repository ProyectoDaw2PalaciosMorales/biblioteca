<script>
function patron(){
var contrasena=document.getElementById("nueva").value.trim();
var patroncontrasena=/^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$/;
if(patroncontrasena.test(contrasena)){	
document.getElementById("formulario").submit();
				
			}else{

document.getElementById("con").innerHTML="minimo una letra en minuscula minimo una letra en mayusculas  minimo un numero  miminmo un caracter especial longitud entre 8 y 16";

			}	
}

</script>
<body><?php ?>
<div class="card mx-auto" style="max-width:319px; margin-top:150px; background-color:#00a3d1; opacity: 90%;">
<div class="mx-auto mt-3 text-white" style="font-family:Times New Roman, Times, serif;">
<h2>Cambia tu contraseña</h2>

</div>
<div class="card-body" style="opacity: 100%;">
<!-- FORMULARIO -->
<form id="formulario" action="<?=base_url()?>usuario/Usuarios/cambiarcontrasenapost" method="post">
<div class="input-group form-group">
<div class="input-group-prepend" style="background-color: #00BDF7">
<span class="input-group-text"><i class="fa fa-key" ></i></span>
</div>
<!-- TextBox - Correo -->
<input type="password" name="antigua"  id="antigua" class="form-control" placeholder="Antigua">
</div>
<div class="input-group form-group">
<div class="input-group-prepend" style="background-color: #00BDF7">
<span class="input-group-text"><i class="fa fa-key" ></i></span>
</div>
<!-- TextBox - Contraseña -->
<input type="password" name="nueva" id="nueva" class="form-control" placeholder="Nueva">
<span id="con"></span>
</div>

<div class="form-group">
<!-- Submit - Ingresar -->
<input type="button" onclick="patron();" value="Cambiar" class="botonIngresar float-right login_btn">
</div>
</form>
<!-- FORMULARIO -->
</div>
<div class="card-footer">


<div class="d-flex justify-content-center links text-white">
<!--<span>El usuario o la contraseña es incorrecto</span>-->
</div>
</div>
</div>
</body>