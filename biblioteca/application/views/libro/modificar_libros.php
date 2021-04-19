<!DOCTYPE html>
<html>
    <head>
        <title>Modifique sus libros aqui</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body id="modificar">
    <h1>Administrar libros</h1>
    <button><a href="<?=base_url()?>libro/Insertar_Libros/insertarlibros">Insertar libro</a></button>
  
<button><a href="<?=base_url()?>libro/Administrador_mostrarlibros/mostrar_libros">Editar libros</a></button>
      <button><a href="<?=base_url()?>autor/Insertar_autor/insertarautor">Insertar Autores</a></button>                          
    
       <button><a href="<?=base_url()?>autor/Administrador_mostrarautores/mostrar_autores">Editar Autores</a></button>
        <br><br><br>
        
         <a href="<?=base_url()?>usuario/login/acceso">HOME</a>
        
        
        
       
        
    </body>
</html>