<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body>
 <h1>Tus comentarios</h1>
        <form action="<?=base_url()?>Comentarios/comentariopost" method="post">
          <textarea rows="10" cols="25" name="comentarios"></textarea>
           
             <input type="hidden" name="id" value=" <?= $usuario->id ?>">
             <br>
             <input type="submit" value="Enviar comentario">
        
            <br><br>
            <a href="<?=base_url()?>Bienvenido/Bienvenidos_u">&ltAtras</a>  
           
		
        </form>
        <br><br><br>
      
       
   </body>     
 </html>
        
  