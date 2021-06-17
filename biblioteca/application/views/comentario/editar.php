

<body>
<div class="cubo"> 
 <h1 class="encabezado">Edita tu comentario</h1>

<form action="<?=base_url()?>comentario/Comentarios/editarPost" method="POST">
	<textarea placeholder="¿Qué te ha parecido este libro?" name="comentarios"><?=$coment->comentario?></textarea>

<input type="hidden" name="id_coment"value="<?=$coment->id?>">
<input type="hidden" name="id_libro"value="<?=$coment->libros_id?>">
<br><br>
<button class="btn btn-success botoninsertar">Actualizar</button>
</form>

</div>
</body>