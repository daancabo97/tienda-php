
<h1>Productos Principales</h1>
   <!--!-->
   <?php while($product = $productos->fetch_object()): ?>
   <!--!-->
   <div class="gallery">
       <a target="_blank" href="<?=base_url?>producto/ver&id=<?=$product->id?>">
    <?php if($product->imagen != null):?>  
       <img src="<?=base_url?>uploads/images/<?=$product->imagen?>"  >
    <?php else:?>   
        <img src="<?=base_url?>assets/img/empanada1.png" />
    <?php endif;?>   
           <h6><?=$product->nombre?></h6>
       </a>
    <p><h5 class="precio">$ <?= $product->precio ?> COL</h5></p>
    <div class="desc"><?=$product->descripcion?></div>
   </div>
   <?php endwhile; ?>
   <!--!-->
   <div id="ver-todas">
       <a href="">Ver mas</a>
   </div>

  