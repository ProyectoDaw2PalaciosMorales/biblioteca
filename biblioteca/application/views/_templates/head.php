<html>
    <head>
        <title>Tu biblioteca</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
         
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="<?=base_url()?>assets/calendario/calendar.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
		<link href="<?=base_url()?>assets/calendario/calendar.min.css" rel="stylesheet">
		
		<!--<link href="../../assets/estilos.css" rel="stylesheet">-->
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        
        
         <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/estilos.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
        
       <link href="../../assets/FontAwesome/css/all.css" rel="stylesheet"> <!--load all styles -->
  		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	   <script src="<?=base_url()?>assets/patrones.js"></script>
  	   
  	   
  	   
  	   
 <script>
	var yy;
	var calendarArray =[];
	var monthOffset = [6,7,8,9,10,11,0,1,2,3,4,5];
	var monthArray = [["ENE","enero"],["FEB","Febrero"],["MAR","Marzo"],["ABR","Abril"],["MAY","Mayo"],["JUN","Junio"],["JUL","Julio"],["AGO","Agosto"],["SEP","Septiembre"],["OCT","Octubre"],["NOV","Noviembre"],["DIC","Diciembre"]];
	var letrasArray = ["L","M","X","J","V","S","D"];
	var dayArray = ["7","1","2","3","4","5","6"];
	$(document).ready(function() {
		$(document).on('click','.calendar-day.have-events',activateDay);
		$(document).on('click','.specific-day',activatecalendar);
		$(document).on('click','.calendar-month-view-arrow',offsetcalendar);
		$(window).resize(calendarScale);
		$(".calendar").calendar({
			"2013910": {
				"Mulberry Festival": {
					start: "9.00",
					end: "9.30",
					location: "London"
				}
			}
		});
		calendarSet();
		calendarScale();
		});
	</script> 	   
  	   
  	   
  	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
		var pageTracker = _gat._getTracker("UA-266167-20");
		pageTracker._setDomainName(".martiniglesias.eu");
		pageTracker._trackPageview();
	} catch(err) {}</script>   
  	   
 
 
 
 
 
 
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
    