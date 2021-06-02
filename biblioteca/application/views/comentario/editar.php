<form action="<?=base_url()?>comentario/Comentarios/editarPost" method="POST">
<input type="text" name="comentario" value="<?=$coment->comentario?>">
<input type="hidden" name="id_coment"value="<?=$coment->id?>">
<button class="btn btn-success">Actualizar</button>
</form>