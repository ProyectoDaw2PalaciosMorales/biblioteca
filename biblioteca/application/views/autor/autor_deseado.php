
<body>
<div class="cubo"> 
  
         <h1  class="encabezado">Autor deseado</h1>
        <form  method="post">           
            
            <label for="autor">Autor:</label>
            <input type="text" id="autor"  onkeyup="autoreselegidos(this.value)"  name="autor">
            <br><br><br>
            
           
            
        </form>
         <div id="autores"></div>
        
      
       
       
        
       
   
    <button type="button" class="volver mx-auto" onclick="window.location.href='<?=base_url()?>usuario/Usuarios/Bienvenidos_x'"> Volver</button>


</div>
</body>