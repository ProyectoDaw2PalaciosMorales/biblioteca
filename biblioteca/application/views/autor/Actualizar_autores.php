
<body>
 <h1>Formulario de Actualizacion</h1>
        <form action="<?=base_url()?>autor/Autores/actualizarpost" method="post">
          
            <label for="nombre">Nombre autor:</label>
            <input type="text" name="nombre" value="<?=$autor -> nombre_autor?>">
             <input type="hidden" name="id" value="<?=$autor -> id?>">
            <br><br><br>
		       
             <input type="submit" value="Actualizar">
           <button> <a href="<?=base_url()?>autor/Autores/mostrar_autoresadninistrador">Volver a la tabla</a> </button>
            <br><br>
           <a href="<?=base_url()?>libro/Libros/panel_administrativo">Atras</a>
           
		
        </form>
        <br><br><br>
      
  
  