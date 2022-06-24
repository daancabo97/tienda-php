<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,  initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>PROYECTO TIENDA</title>

        <!--short icon!-->
        <link rel="shortcut icon" href="#">

        <!--CSS !-->
        <link rel="stylesheet" href="<?=base_url?>./assets/css/styles.css?ts=<?=time()?>">

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
                <a class="titulo" href="<?=base_url?>usuario/logout">
                    <i class="fab fa-php" style="color:yellow;font size:12px;"><h6 style="font-family:Verdana, Geneva, Tahoma, sans-serif;">Bendita🥟</h6></i> 
                </a>
            </div>
                <!-- MENU -->
                <?php $categorias = Utils::showCategorias(); ?>
                    <nav id="menu" class="nav">
                        <button class="toggle" aria-label="Abrir menu">
                            <i class="fas fa-bars"></i>
                        </button>
                    <!-- Traer nombres de las categorias -->
                        <ul class="nav-menu">  
                             
                        <li class="nav-menu-item">
                            <a href="<?=base_url?>inicio/bienvenida" class="nav-menu-link nav-link nav-menu-link_active">INICIO</a>
                        </li>
                            <?php while($cat = $categorias->fetch_object()): ?>
                                <li class="nav-menu-item">
                                    <a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>" class="nav-menu-link nav-link"><?=$cat->nombre?></a>
                                </li>
                            <?php endwhile; ?>    
                    
                    <!--!-->
                    <li class="nav-menu-item">
                        <a href="<?=base_url?>contacto/contactoForm" class="nav-menu-link nav-link nav-menu-link_active">CONTACTO</a>
                    </li>
                    <!--!-->
                </ul>
            </nav>
  <!-- MENU -->
    <div class="clearfix"></div>
        </header>

        <!-- <div id="contenedor"> -->

        