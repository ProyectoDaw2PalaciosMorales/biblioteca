<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
 <h1>Formulario de Actualizacion</h1>
        <form action="<?=base_url()?>autor/Actualizar_autores/actualizarpost" method="post">
          
            <label for="nombre">Nombre autor:</label>
            <input type="text" name="nombre" value="<?=$autor -> nombre_autor?>">
            <br><br><br>
			 <label for="ciudad">Ciudad:</label>
            <input type="text" name="ciudad" value="<?=$autor -> ciudad?>">
			<br><br><br>		
                      
        
            
             <input type="hidden" name="id" value="<?=$autor ->id?>">
            <label for="fechanacimiento">Fecha nacimiento:</label>
            <input type="date" name="fechanacimento" value="<?=$autor ->fecha_nacimiento?>">
            
            <br><br><br>
            
             <input type="submit" value="Actualizar">
           <button> <a href="<?=base_url()?>autor/Administrador_mostrarautores/mostrar_autores">Volver a la tabla</a> </button>
            <br><br>
            <a href="<?=base_url()?>libro/Administrador_libros/panel_administrativo">&ltAtras</a>  
           
		
        </form>
        <br><br><br>
      
       
   </body>     
 </html>
        
  