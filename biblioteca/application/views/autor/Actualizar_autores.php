
<body>
 <h1>Formulario de Actualizacion</h1>
        <form action="<?=base_url()?>autor/Autores/actualizarpost" method="post">
          
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
           <button> <a href="<?=base_url()?>autor/Autores/mostrar_autoresadninistrador">Volver a la tabla</a> </button>
            <br><br>
           <a href="<?=base_url()?>libro/Libros/panel_administrativo">Atras</a>
           
		
        </form>
        <br><br><br>
      
  
  