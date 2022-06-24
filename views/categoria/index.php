<h1>Gestionar categorias</h1>
<br>
<a href="<?=base_url?>categoria/crear" class="botonA" >
     Crear categoria
</a> 
<div style="overflow-x: auto;">    
<table>
	<tr>
		<th>ID</th>
		<th>NOMBRE</th>
	</tr>
	<?php while($cat = $categorias->fetch_object()): ?>
		<tr>
			<td><?=$cat->id;?></td>
			<td><?=$cat->nombre;?></td>
		</tr>
	<?php endwhile; ?>
</table>
</div>