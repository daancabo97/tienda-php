<div id="register" style="margin-left:4%;">

    <h1>Registrar usuarios</h1>
    <form action="<?= base_url ?>usuario/save" method="POST">

    <?php if (isset($_SESSION['register'])  &&  $_SESSION['register'] == 'complete') : ?>
        <strong class="alerta"> Registro completado con exito!</strong>
    <?php elseif (isset($_SESSION['register']) && $_SESSION['register'] != 'failed') : 
        $error = $_SESSION['register'];
        echo $error;
    endif; ?>
    
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" placeholder="Nombre" required />

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" placeholder="Apellidos" required />

        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Email" required />

        <label for="password">Contraseña</label>
        <input type="password" name="password" placeholder="Contraseña" required />

        <input type="submit" value="Registrarse" required />
        
    </form>

<?php Utils::deleteSession('register')?>
</div>



