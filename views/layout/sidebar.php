 <!-- BARRA LATERAL sidebar -->
 <aside class="sidebar" id="sidebar">



<div id="login" class="bloque">
    <h3>Iniciar Sesion</h3>


    <form action="login.php" method="post">
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Email" />

        <label for="password">Contraseña</label>
        <input type="password" name="password" placeholder="Contraseña" />

        <input type="submit" value="Entrar" />
    </form>
</div>

<div id="register" class="bloque">


    <!-- Mostrar errores -->
    <h3>Registro</h3>
    <!-- -->

    <form action="registro.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" placeholder="Nombre" />
        <!-- llamada a la funcion "mostrarError" proveniente de helpers para mostrar validacion del error en el campo -->

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" placeholder="Apellidos" />
        <!-- llamada a la funcion "mostrarError" proveniente de helpers para mostrar validacion del error en el campo -->

        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Email" />
        <!-- llamada a la funcion "mostrarError" proveniente de helpers para mostrar validacion del error en el campo -->

        <label for="password">Contraseña</label>
        <input type="password" name="password" placeholder="Contraseña" />
        <!-- llamada a la funcion "mostrarError" proveniente de helpers para mostrar validacion del error en el campo -->

        <input type="submit" value="Registrar" name="submit" />
    </form>
    <!-- llamada a la funcion para borrar validaciones de los errores mostrados en cada uno de los campos -->
</div>
</aside>

<!-- CAJA PRINCIPAL contenido central-->
<main class="contenido">
<div id="principal">
