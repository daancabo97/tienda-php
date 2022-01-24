<div id="register" style="margin-left:4%;">

    <h1>Registrar usuarios</h1>
    
    <?php if (isset($_SESSION['register'])  &&  $_SESSION['register'] == 'complete'): ?>
        <strong class="alerta"> Registro completado correctamente</strong>
    <?php elseif (isset($_SESSION['register']) && $_SESSION['register'] =!'failed'): ?>
        <strong class="alerta-error">Falla en el registro, escriba bien los datos</strong>
    <?php endif; ?>
    <?php Utils::deleteSession('register'); ?>

    <form action="<?=base_url?>usuario/save" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" placeholder="Nombre" requiredrequired />

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" placeholder="Apellidos" required />

        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Email" required />

        <label for="password">Contraseña</label>
        <input type="password" name="password" placeholder="Contraseña" required />

        <input type="submit" value="Registrarse" />
    </form>
   
</div>