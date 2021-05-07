
 
 <h1>Formulario de insercion</h1>
        <form action="<?=base_url()?>libro/Libros/insertarlibrospost" method="post" enctype="multipart/form-data">
            
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
                <input type="text" name="autor">
         
      
           
           
           
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
              <label for="ejemplares">Introduce la descricion</label>
           
            <br>
             <textarea rows="10" cols="25" name="descricion"></textarea>
             <br></br>
             <label for="idp-fo">foto</label>
		<input id="idp-fo"   type="file"  name="foto" accept="image/x-png,image/gif,image/jpeg" />
		  <br></br>
            <input type="submit" value="Insertar">
            <button><a href="<?=base_url()?>libro/Libros/panel_administrativo">Atras</a></button>
        </form>
        <br><br><br>
   
 
        
  