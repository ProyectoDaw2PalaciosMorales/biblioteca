<!DOCTYPE>
<html>
    <head>
        <title></title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
 
 <h1>Formulario de insercion</h1>
        <form action="<?=base_url()?>libro/Insertar_Libros/insertarlibrospost" method="post">
            
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo">
            
            
            <br><br><br>
            
            
            <label for="ano">Año de edicion nuevo:</label>
            <input type="date" name="ano">
            
            <br><br><br>
            
            
            
            <label for="editorial">Editorial nueva:</label>
            <input type="text" name="editorial">
            
             <br><br><br>
            <label for="autor">Autor:</label>
                <select name="autor">
         
       <?php foreach ($autores as $autor):?>
    
           
		<option   value="<?=$autor?>"><?=$autor?></option>
		
		
		<?php endforeach;?>
		
     </select>
           
           
           
            <br><br><br>
              <label for="genero_literario">Genero literario preferido:</label>
        <select name="genero_literario">
            <option value="Ciencia ficcion">Ciencia ficcion</option>
            <option value="Policiaco">Policiaco</option>
            <option value="Novela romantica">Novela romantica</option>
            <option value="Ensayo">Ensayo</option>
            <option value="poesia">Poesia</option>
             <option value="terror">Terror</option>
              <option value="Infantil">Infantil</option>
        </select>
            <br><br><br>
            <label for="ejemplares">Nº de ejemplares:</label>
            <input type="text" name="ejemplares">
            <br><br>
            <input type="submit" value="Insertar">
            <button><a href="<?=base_url()?>libro/Administrador_libros/panel_administrativo">Atras</a></button>
        </form>
        <br><br><br>
       
        </body>
</html>
 
        
  