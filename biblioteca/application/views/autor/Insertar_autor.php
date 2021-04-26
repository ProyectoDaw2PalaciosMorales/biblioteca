

 <h1>Formulario de insercion</h1>
        <form action="<?=base_url()?>autor/Autores/insertarautorpost" method="post">
            
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
            <button><a href="<?=base_url()?>libro/Libros/panel_administrativo">Atras</a></button>
        </form>
        <br><br><br>
        
 
       
        
 
        
  