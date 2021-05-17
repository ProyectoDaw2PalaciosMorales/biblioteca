<h1>recuperar la contraseña</h1>

<form action="<?=base_url()?>usuario/Usuarios/recuperarcontrasenapost" method="post">
    <label for="email"> Introduca un correo electronico:</label><br>
    <input type="email" id="email" name="email"><br><br>
    <input type="submit" value="enviar">
  </form>
