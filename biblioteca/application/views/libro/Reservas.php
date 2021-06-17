
<h1 class="encabezado">Tus reservas</h1>

<div class="text-info centrado">
<p>Estado: 0=Espera, 1=Activo, 2=Fuera de fecha, 3=Devuelto;</p>
</div>
<br><br>

<table class="table">
    <tr class="tablas">
      <th scope="col">Titulo</th>
      <th scope="col">Usuario</th>
      <th scope="col">Estado</th>
      <th scope="col">Fecha Inicio</th>
      <th scope="col">Fecha Limite</th>
    </tr>
    <?php foreach($reservas as $reserva): ?>
        <tr class="tablas1">
    <?php foreach($libros as $libro):?>
	  <?php if(($reserva['libros_id']) == ($libro->id)):?>
        <td> <?=$libro->titulo?></td> 
          <?php endif; endforeach;?>
    <?php foreach($usuarios as $usuario): ?>
      <?php if(($reserva['usuario_id']) == ($usuario->id)):?>
      <td><?= $usuario->nombre?></td>
      <?php endif; endforeach;?>
      <td><form method="POST" action="<?=base_url();?>libro/Libros/actualizarEstado" ><input type="hidden" name="id" value="<?=$reserva->id?>"> <select name="estado" id="estado" onchange="submit();">
  <option value="0" name="estado"  <?php if ($reserva->estado == '0') echo ' selected="selected"'; ?>>Espera</option>
  <option value="1" name="estado"  <?php if ($reserva->estado == '1') echo ' selected="selected"'; ?>>Activo</option>
  <option value="2" name="estado"  <?php if ($reserva->estado == '2') echo ' selected="selected"'; ?>>Fuera de fecha</option>
  <option value="3" name="estado"  <?php if ($reserva->estado == '3') echo ' selected="selected"'; ?>>Devuelto</option>
</select></form></td>
      <td><?=$reserva->fecha ?></td>
      <td><?=$reserva->fecha_limite?></td>
    </tr>
    <?php endforeach;?>
</table>
