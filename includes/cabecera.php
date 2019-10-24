<?php require_once 'conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>



<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset = "utf-8"/>
    <title>Blog de Videojuegos</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/estilos.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css"/>


</head>


<body>

<header id="cabecera">
    <div id="logo">

        <!--LOGO -->
        <a  href = "index.php">
            Blog de Videojuegos
        
        </a>


    </div>

    <!-- MENU -->

    

    <nav id="menu">
    
        <ul>
            <li>
                <a href="#">Inicio</a>
            </li>

            <?php 
                $categorias = conseguirCategorias($db);
                while( $categoria = mysqli_fetch_assoc($categorias)):
            ?>

                <li>
                    <a href="categoria.php?id=<?=$categoria['id']?>"> <?=$categoria['nombre']   ?> </a> 
                </li>
            
            <?php endwhile; ?>
           <li>
                <a href="#">Sobre Mi </a>
            </li>
            <li>
                <a href="#">Contacto</a>
            </li>





        </ul>
    
    </nav>

    <div class="clearfix"></div>
</header>

<div id = "contenedor">