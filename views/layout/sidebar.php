 <!-- BARRA LATERAL sidebar -->
 <aside class="sidebar" id="sidebar">

     <div id="login" class="bloque">

     <?php if (!isset($_SESSION['identity'])): ?>
         <h3>Iniciar Sesion</h3>
         <form action="<?= base_url ?>usuario/login" method="post">
            <label for="email">Email</label>
              <input type="text" name="email" placeholder="Email" />
            <label for="password">Contraseña</label>
              <input type="password" name="password" placeholder="Contraseña" />
            <input type="submit" value="Entrar" />
         </form>
         <?php else : ?>
                 <h3> BIENVENID@</br> <?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></h3>
         <?php endif; ?>
    </div>
    
     <!-- Opciones usuario -->
    <div id="content">
        <?php if (isset($_SESSION['admin'])): ?>
            <a href="#" class="boton boton-ver">Gestionar categorias <i class="fas fa-eye"></i></a><br>
            <a href="#" class="boton boton-categoria">Gestionar productos <i class="fas fa-pencil-alt"></i></a><br>
            <a href="#" class="boton boton-ver">Gestionar pedidos <i class="fas fa-eye"></i></a><br>
        <?php endif; ?>
           
        <?php if(isset($_SESSION['identity'])): ?>
            <a href="" class="boton boton-crear">Mis pedidos <i class="fas fa-pencil-alt"></i></a><br>
            <a href="<?=base_url?>usuario/logout" class="boton boton-ver">Cerrar Sesion<i class="fas fa-eye"></i></a><br>
        <?php endif; ?>
      </div>
     <!-- Opciones usuario -->

 </aside>
 <!-- CAJA PRINCIPAL contenido central-->
 <main class="contenido">
<div id="principal"> 