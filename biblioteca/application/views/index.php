<?php
    
    
    
    
?>

<html>
    <head>
        <title>Biblioteca</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/estilos.css">
    </head>
    <body id="index">
        <h1>Iniciar sesion</h1>
        <form action="<?=base_url()?>/login/acceso" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" required>
            <br><br>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" required>
            <br><br>
            <input type="submit" value="Entrar">
            <br><br><br><br>
            <a href="<?=base_url()?>Registrar/registro">Si no estas resgistrado pincha aqui.</a>
        </form> 
    </body>
</html>
