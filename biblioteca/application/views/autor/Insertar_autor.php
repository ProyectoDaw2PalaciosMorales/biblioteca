<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
    </head>
    <body >

 <h1>Formulario de insercion</h1>
        <form action="<?=base_url()?>autor/Insertar_autor/insertarautorpost" method="post">
            
            <label for=" nombre_autor"> Nombre  del autor:</label>
            <input type="text" name=" nombre_autor">
            
          
          
            <br><br><br>
            
            
            <label for=" ciudad">Ciudad:</label>
            <input type="text" name="ciudad">
            
            <br><br><br>
            
            
            
            <label for="fechanacimento">Fecha de nacimento:</label>
            <input type="date" name="fechanacimento">
            
             <br><br><br>
            
               
            
            <input type="submit" value="Insertar">
            <button><a href="<?=base_url()?>libro/Administrador_libros/panel_administrativo">Atras</a></button>
        </form>
        <br><br><br>
        
    </body>
</html>    
       
        
 
        
  