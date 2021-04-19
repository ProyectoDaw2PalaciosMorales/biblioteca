<?php





?>

<!DOCTYPE html>
<html lang="es">
<head>
<title>Registro de la biblioteca</title>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/estilos.css">

</head>
<body id="registro">
    <h1 id="titulo">Bienvenido a nuestra biblioteca</h1>
    
    
    <form class="form_registr" action="<?=base_url()?>usuario/Registrar/registropost" method="post" enctype="multipart/form-data">
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
    <br><br>
    
    
   
    
    <br><br><br><br>v<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br>v<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>