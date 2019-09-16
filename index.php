<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset = "utf-8"/>
    <title>Blog de Videojuegos</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/estilos.css"/>


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

            <li>
                <a href="#">CATEGORIA 1 </a>
            </li>
            <li>
                <a href="#">CATEGORIA 2 </a>
            </li>
            <li>
                <a href="#">CATEGORIA 3 </a>
            </li>
            <li>
                <a href="#">CATEGORIA 4 </a>
            </li>
            <li>
                <a href="#">Sobre Mi </a>
            </li>
            <li>
                <a href="#">Contacto</a>
            </li>





        </ul>
    
    </nav>


</header>

    <div class="clearfix"></div>
    

    <div id = "contenedor">
    <!--BARRA LATERAL -->

        <aside id = "sidebar">
            <div id="login" class="bloque">
            
                <h3>Identificate</h3>
                
                    <form action="login.php" method = "POST" >
                    
                    <label for = "email">Email</label>
                    <input type="email" name="email"/>

                    <label for ="password">Contrasena</label>
                    <input type="password" name="password"/>

                    <input type="submit" value ="Entrar"/>



                    </form>


            </div>  


            <div id="register" class="bloque">
            
                <h3>Registrate</h3>
                
                    <form action="registro.php" method = "POST" >
                    
                    <label for = "nombre">Nombre</label>
                    <input type="text" name="nombre"/>
                    
                    <label for = "apellidos">Apellidos</label>
                    <input type="text" name="apellidos"/>

                    <label for = "email">Email</label>
                    <input type="email" name="email"/>

                    <label for ="password">Contrasena</label>
                    <input type="password" name="password"/>

                    <input type="submit" value ="Entrar"/>



                    </form>


            </div>  
        
        
        </aside>
        <!--CAJA PRINCIPAL-->

        <div id ="principal">

            <h1>Ultimas Entradas</h1>
            
            <article class="entradas">
            <a href="#"><h2>Titulo de Mi Entrada</h2></a>
            
            <p>Los mejores video juegos de la historia de los 90 en la
            actualidoad 2019 </p>
            </article>

            <article class="entradas">
            <a href="#"><h2>Titulo de Mi Entrada</h2></a>
            <p>Los mejores video juegos de la historia de los 90 en la
            actualidoad 2019 </p>
            
            </article>

            <article class="entradas">
            <a href="#"><h2>Titulo de Mi Entrada</h2></a>
            <p>Los mejores video juegos de la historia de los 90 en la
            actualidoad 2019 </p>
            
            </article>

            <div id="ver-todas">
            <a href="">Ver todas las Entradas </a>
        </div>
            
        </div> <!--FIN DIV PRINCIPAL-->

        


        <div class="clearfix"></div>
    
    
    </div>

    <footer id="pie">
    <p>Desarrollado por Ramon Arroyo Sublimonchis &copy 2019 </p>
    
    </footer>




    

</body>








</html>   