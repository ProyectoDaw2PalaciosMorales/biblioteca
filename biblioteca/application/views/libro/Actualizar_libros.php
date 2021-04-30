

 <h1>Formulario de Actualizacion</h1>
        <form action="<?=base_url()?>libro/Libros/actualizarpost" method="post" enctype="multipart/form-data">
          
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
            
            
        <select name="autor">
         <option select  value="<?=$libro->autor->nombre_autor?>"><?=$libro->autor->nombre_autor?></option>
       <?php foreach ($autores as $autor):?>
    
           <?php if ($autor!=$libro->autor->nombre_autor):?>
		<option   value="<?=$autor?>"><?=$autor?></option>
		<?php endif;?>
		
		<?php endforeach;?>
		
     </select>
           
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
              <label for="ejemplares">Introduce la descricion</label>
           
            <br>
             <textarea rows="10" cols="25" name="descricion"><?=$libro ->descricion?></textarea>
               <br></br>
             <label for="idp-fo">foto</label>
		<input id="idp-fo"   type="file"  name="foto" accept="image/x-png,image/gif,image/jpeg" />
		  <br></br>
             
            <input type="submit" value="Actualizar">
           <button> <a href="<?=base_url()?>libro/Libros/mostrar_libros">Volver a la tabla</a> </button>
            <br><br>
            <a href="<?=base_url()?>libro/Libros/panel_administrativo">&ltAtras</a>  
              
        </form>
        <br><br><br>
   
  