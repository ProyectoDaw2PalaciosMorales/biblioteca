

<html>
    <head>
        <title>Biblioteca</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body id="index">
        <h1>Iniciar sesion</h1>
        <form action="<?=base_url()?>usuario/login/acceso" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" required>
            <br><br>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" required>
            <br><br>
            <input type="submit" value="Entrar">
            <br><br><br><br>
            <a href="<?=base_url()?>usuario/Registrar/registro">Si no estas resgistrado pincha aqui.</a>
        </form> 
    </body>
</html>
