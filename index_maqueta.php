<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,  initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>PROYECTO TIENDA</title>

    <!--short icon!-->
    <link rel="shortcut icon" href="#">

    <!--CSS !-->
    <link rel="stylesheet" href="./assets/css/styles.css">

    <!--font awesome!-->
    <script src="https://kit.fontawesome.com/46fc319774.js" crossorigin="anonymous"></script>
    <script defer src="index.js"></script>
</head>

<body>

    <div class="contenedor-general">

        <!-- CABECERA header -->
        <header class="header" id="cabecera">

            <!-- LOGO -->
            <div id="logo" class="logo">
                <a class="titulo" href="index.php">
                    <i class="fab fa-php"></i> Tienda
                </a>
            </div>


            <!-- MENU -->
            <nav id="menu" class="nav">

                <button class="toggle" aria-label="Abrir menu">
                    <i class="fas fa-bars"></i>
                </button>

                <ul class="nav-menu ">
                    <!--!-->
                    <li class="nav-menu-item">
                        <a href="index.php" class="nav-menu-link nav-link">Inicio</a>
                    </li>
                    <!--!-->


                    <!--!-->
                    <li class="nav-menu-item">
                        <a href="categoria.php?id3" class="nav-menu-link nav-link">Python</a>
                    </li>
                    <!--!-->


                    <!--!-->
                    <li class="nav-menu-item">
                        <a href="categoria.php?id5" class="nav-menu-link nav-link">JS</a>
                    </li>
                    <!--!-->


                    <!--!-->
                    <li class="nav-menu-item">
                        <a href="categoria.php?id7" class="nav-menu-link nav-link">JAVA</a>
                    </li>
                    <!--!-->


                    <!--!-->
                    <li class="nav-menu-item">
                        <a href="categoria.php?id8" class="nav-menu-link nav-link">Php</a>
                    </li>
                    <!--!-->


                    <!--!-->
                    <li class="nav-menu-item">
                        <a href="categoria.php?id10" class="nav-menu-link nav-link">RUBY</a>
                    </li>
                    <!--!-->


                    <!--!-->
                    <li class="nav-menu-item">
                        <a href="categoria.php?id10" class="nav-menu-link nav-link">DATA BASES</a>
                    </li>
                    <!--!-->


                    
                    <!--!-->
                    <li class="nav-menu-item">
                        <a href="categoria.php?id9" class="nav-menu-link nav-link">Sist. operativos</a>
                    </li>
                    <!--!-->





                    <!--!-->
                    <li class="nav-menu-item">
                        <a href="index.php" class="nav-menu-link nav-link">Sobre mi</a>
                    </li>
                    <!--!-->
                    <li class="nav-menu-item">
                        <a href="index.php" class="nav-menu-link nav-link nav-menu-link_active">Contacto</a>
                    </li>
                    <!--!-->
                </ul>
            </nav>

            <div class="clearfix"></div>
        </header>



        <!-- <div id="contenedor"> -->


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
                <h1>Productos recientes</h1>
                <!--!-->
                <!--!-->
                <div class="gallery">
                    <a target="_blank" href="img_5terre.jpg">
                        <img src="./assets/IMG/laravel.png" alt="Cinque Terre" width="600" height="400">
                    
                    <h6>Laravel</h6>
                    <p>$ 30.000</p>
                    <div class="desc">Add a description of the image here</div>
                    </a>
                </div>
                <!--!-->
                <div class="gallery">
                    <a target="_blank" href="img_forest.jpg">
                        <img src="./assets/IMG/aangular.svg.png" alt="Forest" width="600" height="400">
                    
                    <h6>Angular</h6>
                    <p>$ 30.000</p>
                    <div class="desc">Add a description of the image here</div>
                    </a>
                </div>
                <!--!-->
                <div class="gallery">
                    <a target="_blank" href="img_lights.jpg">
                        <img src="./assets/IMG/django.png" alt="Northern Lights" width="600" height="400">
                    
                    <h6>Django</h6>
                    <p>$ 30.000</p>
                    <div class="desc">Add a description of the image here</div>
                    </a>
                </div>
                <!--!-->
                <div class="gallery">
                    <a target="_blank" href="img_mountains.jpg">
                        <img src="./assets/IMG/spring.png" alt="Mountains" width="600" height="400">
                    
                    <h6>Spring</h6>
                    <p>$ 30.000</p>
                    <div class="desc">Add a description of the image here</div>
                    </a>
                </div>
                <!--!-->

                <!--!-->

                <!--!-->

                <div id="ver-todas">
                    <a href="">Ver todas las entradas</a>
                </div>
            </div><!-- Fin principal contenido central -->

        </main>
        <!-- Fin contenido principal-->
        <!-- </div>-->


        <!-- FOOTER footer -->
        <footer class="footer" id="pie">
            <p>Todos los derechos reservados &copy;2021</p>
            <a href=""><i class="fab fa-facebook-square titulo"></i></a>
            <a href=""><i class="fab fa-instagram-square titulo"></i></a>
            <a href=""><i class="fab fa-whatsapp-square titulo"></i></a>
        </footer>

    </div>
</body>
</html>