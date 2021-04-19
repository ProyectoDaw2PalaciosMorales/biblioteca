
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
 <h1>Tus comentarios</h1>
        <form action="<?=base_url()?>comentario/Comentarios/comentariopost" method="post">
          <textarea rows="10" cols="25" name="comentarios"></textarea>
           
             <input type="hidden" name="id" value=" <?= $usuario->id ?>">
             <br>
             <input type="submit" value="Enviar comentario">
        
            <br><br>
            <a href="<?=base_url()?>usuario/Bienvenido/Bienvenidos_u">&ltAtras</a>  
           
		
        </form>
        <br><br><br>
      
       
   </body>     
 </html>
        
  