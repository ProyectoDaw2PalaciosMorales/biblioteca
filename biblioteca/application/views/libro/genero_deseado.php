

    
   


    
    
         <h1 align="center">Genero deseado</h1>
        <form  onchange="generoselegidos(this.value)" method="post">           
            
           <label for="genero_literario">Genero literario preferido:</label>
        <select name="genero_literario " id="genero_literario">
           <option >Elige un genero</option>
            <option value="Ciencia ficcion">Ciencia ficcion</option>
            <option value="Policiaco">Policiaco</option>
            <option value="Novela romantica">Novela romantica</option>
            <option value="Ensayo">Ensayo</option>
            <option value="poesia">Poesia</option>
             <option value="terror">Terror</option>
              <option value="infantil">Infantil</option>
        </select>          
          
            
          
            
        </form>
        
        <div id="generos"></div>
        
     
        <br><br><br>
       
    <a href="<?=base_url()?>">Home</a>
  

