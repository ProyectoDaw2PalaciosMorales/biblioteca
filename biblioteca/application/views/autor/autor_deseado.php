
<!DOCTYPE>
<html>
    <head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
          <script>
  
function autoreselegidos(str) {

var autor = document.getElementById("autor").value;

console.log(autores)
 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("autores").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "<?=base_url()?>autor/Autores/autorpost", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("autor="+  autor);
  
}</script>
        
    </head>
    <body>
         <h1 align="center">Autor deseado</h1>
        <form  method="post">           
            
            <label for="autor">Autor:</label>
            <input type="text" id="autor"  onkeyup="autoreselegidos(this.value)"  name="autor">
            <br><br><br>
            
           
            
        </form>
         <div id="autores"></div>
        
      
       
       
        <br><br><br>
       
    <a href="<?=base_url()?>usuario/login/acceso">Home</a>
    </body>
</html>



<?php


