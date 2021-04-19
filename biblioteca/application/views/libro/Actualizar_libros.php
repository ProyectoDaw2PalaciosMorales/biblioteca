
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
 <h1>Formulario de Actualizacion</h1>
        <form action="<?=base_url()?>libro/Actualizar_Libros/actualizarpost" method="post">
          
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" value="<?=$libro -> titulo?>">
			
			
            
            
            <br><br><br>
            
             <input type="hidden" name="id" value="<?=$libro ->id?>">
            <label for="ano">Año de edicion nuevo:</label>
            <input type="date" name="ano" value="<?=$libro ->ano_edicion?>">
            
            <br><br><br>
            
            
            
            <label for="editorial">Editorial nueva:</label>
            <input type="text" name="editorial" value="<?=$libro ->editorial?>">
            
            
            <br><br><br>
               
            
            <label for="autor">Autor:</label>
            <input type="text" name="autor"value="<?=$libro ->autor->nombre_autor?>"> 
           
                <br><br><br>
                      <label for="genero_literario">Genero literario preferido:</label>
        <select name="genero_literario">
        <option  select value="<?=$libro->genero_literario?>"><?=$libro->genero_literario?></option>
       <?php foreach ($generos as $genero):?>
     
           <?php if ($genero!= $libro->genero_literario):?>
		<option   value="<?=$genero?>"><?=$genero?></option>
		<?php endif;?>
		
		<?php endforeach;?>
		
     </select>
           
                
        
        <br><br><br>
            <label for="ejemplares">Nº de ejemplares:</label>
            <input type="text" name="ejemplares" value="<?=$libro ->ejemplares?>" >
            <br><br>
            <input type="submit" value="Actualizar">
           <button> <a href="<?=base_url()?>libro/Administrador_mostrarlibros/mostrar_libros">Volver a la tabla</a> </button>
            <br><br>
            <a href="<?=base_url()?>libro/Administrador_libros/panel_administrativo">&ltAtras</a>  
              
        </form>
        <br><br><br>
      
       
   </body>     
 </html>
        
  