
<!DOCTYPE>
<html>
    <head>
        <title></title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script>
  
function generoselegidos(str) {
var selection = document.getElementById("genero_literario");
var resultado = selection.options[selection.selectedIndex].value;

 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("generos").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "<?=base_url()?>libro/Generos/generopost", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("genero_literario="+ resultado);
  
}
</script>
        
    </head>
    <body>
    
   


    
    
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
       
    <a href="<?=base_url()?>usuario/login/acceso">Home</a>
    </body>
</html>



<?php


