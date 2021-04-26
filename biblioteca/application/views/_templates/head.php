
<html>
    <head>
        <title>Tu bibioteca</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
         <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/estilos.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	   <script>
function enviar_formulario(){
   document.formulario1.submit()
}
function enviar_formulario2(){
   document.formulario2.submit()
}
</script>              
 
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
  xhttp.open("POST", "<?=base_url()?>libro/Libros/generopost", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("genero_literario="+ resultado);
  
}
</script>
    </head>

    <body>