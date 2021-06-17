
<h1 class="recu_contrasena_titulo">Recuperar la contraseña</h1>
<div class="recu_contrasena">
<form action="<?=base_url()?>usuario/Usuarios/recuperarcontrasenapost" method="post">
    <label for="email"> Introduca un correo electronico:</label><br>
    <input class="form-control" type="email"  id="email" name="email"><br><br>

    <input class="volver" id="boton"   type="submit" value="Enviar">
    <span id="em"></span>
  </form>
  </div>
