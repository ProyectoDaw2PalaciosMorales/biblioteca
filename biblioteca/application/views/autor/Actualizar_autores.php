
<body>
<div class="cubo">  
 <h1 class="encabezado">Formulario de Actualización de autores</h1>
        <form action="<?=base_url()?>autor/Autores/actualizarpost" method="post">
          
            <label for="nombre">Nombre autor:</label>
            <input type="text" name="nombre" value="<?=$autor -> nombre_autor?>">
             <input type="hidden" name="id" value="<?=$autor -> id?>">
            <br><br><br>
		       
             <input type="submit" value="Actualizar">   
		
        </form>
        
        
            <div class="centrado">   
      <button type="button" class="mx-auto fijo"> <a href="<?=base_url()?>autor/Autores/mostrar_autoresadninistrador">TABLA</a> </button>
            
              
   
   <button type="button" class="volver mx-auto" onclick="window.location.href='<?=base_url()?>libro/Libros/panel_administrativo'"> Volver</button>
   </div>
        
      </div>
  
  