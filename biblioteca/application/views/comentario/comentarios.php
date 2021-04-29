
 <h1>Tus comentarios</h1>
        <form action="<?=base_url()?>comentario/Comentarios/comentariopost" method="post">
          <textarea rows="10" cols="25" name="comentarios"></textarea>
           
             <input type="hidden" name="id" value=" <?= $usuario->id ?>">
               <input type="hidden" name="id_libro" value="1">
             <br>
             <input type="submit" value="Enviar comentario">
        
            <br><br>
            <a href="<?=base_url()?>usuario/Usuarios/Bienvenidos_u">&ltAtras</a>  
           
		
        </form>
        <br><br><br>
      
 