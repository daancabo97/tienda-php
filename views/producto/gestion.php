<h1>Gestion de productos</h1>
<br>
<a href="<?=base_url?>producto/crear"class="botonA">
     Crear producto
</a>  

<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'): ?>
    <strong class="alerta">El producto se ha creado correctamente</strong>
<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] != 'complete'): ?>
    <strong class="alerta-error ">El producto NO se ha creado correctamente</strong>
<?php endif; ?>	
<?PHP Utils::deleteSession('producto');?>

<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>
    <strong class="alerta">El producto se ha borrado correctamente</strong>
<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>
    <strong class="alerta-error">El producto NO se ha borrado correctamente</strong>
<?php endif; ?>	
<?PHP Utils::deleteSession('delete');?>

<div style="overflow-x: auto;">
<table>
	<tr>
		<th>ID</th>
        <th>NOMBRE</th>
        <th>PRECIO</th>
        <th>CANTIDAD</th>
        <th>ACCIONES</th>
        <br>
	</tr>
	<?php while($pro = $productos->fetch_object()): ?>
		<tr>
			<td><?=$pro->id;?></td>
            <td><?=$pro->nombre;?></td>
            <td><?=$pro->precio;?></td>
            <td><?=$pro->cantidad;?></td>
            <td>
            <br>
               <a href="<?=base_url?>producto/editar&id=<?=$pro->id?>" class="boton boton-ver">Editar</a>
               <br>
               <a href="<?=base_url?>producto/eliminar&id=<?=$pro->id?>" class="boton boton-crear">Eliminar</a>
               <br>
            </td>   
		</tr>
	<?php endwhile; ?>
</table>
</div>