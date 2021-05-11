
<h1>Iniciar sesion</h1>
<form action="<?=base_url()?>usuario/Usuarios/acceso" method="post">
<label for="usuario">Usuario:</label>
<input type="text" name="usuario" required>
<br><br>
<label for="password">Contraseña:</label>
<input type="password" name="password" required>
<br><br>
<input type="submit" value="Entrar">
<br><br><br><br>
<a href="<?=base_url()?>usuario/Usuarios/registro">Si no estas resgistrado pincha aqui.</a>
</form>
