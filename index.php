<?php require "./inc/session_start.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="CSSLANDING/estilos.css">
    <link rel="icon" href=".Logo/loguito">
        <?php include "./inc/head.php"; ?>
    </head>
    <body>
        <?php

            if(!isset($_GET['vista']) || $_GET['vista']==""){
                $_GET['vista']="login";
            }


            if(is_file("./vistas/".$_GET['vista'].".php") && $_GET['vista']!="login" && $_GET['vista']!="404"){

                /*== Cerrar sesion ==*/
                if((!isset($_SESSION['id']) || $_SESSION['id']=="") || (!isset($_SESSION['usuario']) || $_SESSION['usuario']=="")){
                    include "./vistas/logout.php";
                    exit();
                }

                include "./inc/navbar.php";

                include "./vistas/".$_GET['vista'].".php";

                include "./inc/script.php";

            }else{
                if($_GET['vista']=="login"){
                    include "./vistas/login.php";
                }else{
                    include "./vistas/404.php";
                }
            }
        ?>
          <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ushuaia</title>
  <link rel="stylesheet" href="https://xsgames.co/animatiss">
  <link rel="stylesheet" href="CSSLANDING/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&family=Poller+One&display=swap">
  <link rel="icon" href="../Logo/loguito">
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="wrap-header-hero">
        <header class="main-header">
          <div class="header-wrap">
            <div class="wrap-logo-header">
              <a class="logo-header" href="/">
                USHUAIA
              </a>
            </div>
            <div class="wrap-nav-header">
              <nav class="nav-header">
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                  <i class="toggle-menu">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDM4NCAzODQiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTM2OCAxNTQuNjY3OTY5aC0zNTJjLTguODMyMDMxIDAtMTYtNy4xNjc5NjktMTYtMTZzNy4xNjc5NjktMTYgMTYtMTZoMzUyYzguODMyMDMxIDAgMTYgNy4xNjc5NjkgMTYgMTZzLTcuMTY3OTY5IDE2LTE2IDE2em0wIDAiIGZpbGw9IiMwMDAwMDAiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0zNjggMzJoLTM1MmMtOC44MzIwMzEgMC0xNi03LjE2Nzk2OS0xNi0xNnM3LjE2Nzk2OS0xNiAxNi0xNmgzNTJjOC44MzIwMzEgMCAxNiA3LjE2Nzk2OSAxNiAxNnMtNy4xNjc5NjkgMTYtMTYgMTZ6bTAgMCIgZmlsbD0iIzAwMDAwMCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTM2OCAyNzcuMzMyMDMxaC0zNTJjLTguODMyMDMxIDAtMTYtNy4xNjc5NjktMTYtMTZzNy4xNjc5NjktMTYgMTYtMTZoMzUyYzguODMyMDMxIDAgMTYgNy4xNjc5NjkgMTYgMTZzLTcuMTY3OTY5IDE2LTE2IDE2em0wIDAiIGZpbGw9IiMwMDAwMDAiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiPjwvcGF0aD48L2c+PC9zdmc+" />
                  </i>
                </label>
        
                <ul class="main-menu">
                  <li class="menu-item"><a href="">Nosotros</a></li>
                  <li class="menu-item"><a href="carta.html">Carta</a></li>
                  <li class="menu-item"><a href="#Blog">Blog</a></li>
                  <li id="nav-main-contact" class="menu-item"><a href="Contacto.html">Contacto</a></li>
                </ul>
        
              </nav>
            </div>
          </div>
        </header>
        <!-- Apertura del main-->
          <main class="main-section">
          <div class="hero-home-page">
            <div class="wrap-hero-home-page">
              <h1>Bienvenido a tu restaurante Ushuaia</h1>
              <p>Bienvenido a nuestro vibrante mundo de sabores. Descubre un paraíso de comidas rápidas, donde la calidad se une a la conveniencia. Deliciosas opciones que satisfacen todos los antojos, servidas con rapidez y amor. ¡Déjate llevar por una experiencia gastronómica inolvidable!</p>
              <a href="hacerpedido.html" class="cta-main">Hacer tu pedido</a>
            </div>
          </div> 
            </section>
          </div>
            
          </main>
        <!-- Cierre de la etiqueta main -->

        <!-- Tarjetas de comida -->
  <section class="wrap section">
    <div class="wrap-title-section">
      <h2>Tarjetas de Comida</h2>
    <div class="column-4 columns">
      <div style="background:url(imagenes/sand.jpg)center;background-size: cover;" class="tarjeta-rest">
        <div class="wrap-text_tarjeta-rest">
          <h3>Sandwich-SD</h3>
          <p>Un apetitoso sándwich repleto de sabrosos ingredientes: pan crujiente, carnes jugosas, queso fundido, vegetales frescos, una delicia irresistible.</p>
          <div class="cta-wrap_tarjeta-rest">
            <div class="precio_tarjeta-rest">
              <span>$6.000</span>
            </div>
            <div class="cta_tarjeta-rest">
              <a href="hacerpedido.html">Pedir ahora</a>
            </div>
          </div>
        </div>  
      </div>
      <div style="background:url(imagenes/hamb.jpg)center;background-size: cover;" class="tarjeta-rest">
        <div class="wrap-text_tarjeta-rest">
          <h3>Hamburguesa-HG</h3>
          <p>Una jugosa hamburguesa hecha a la parrilla, con carne de primera calidad, queso derretido, crujientes vegetales y una irresistible salsa especial.</p>
          <div class="cta-wrap_tarjeta-rest">
            <div class="precio_tarjeta-rest">
              <span>$15.000</span>
            </div>
            <div class="cta_tarjeta-rest">
              <a href="hacerpedido.html">Pedir ahora</a>
            </div>
          </div>
        </div>  
      </div>
      <div style="background:url(imagenes/pizza.jpg)center;background-size: cover;" class="tarjeta-rest">
        <div class="wrap-text_tarjeta-rest">
          <h3>Pizza-PZ</h3>
          <p>Una pizza recién salida del horno, con una base de masa crujiente, generosas capas de queso fundido y una variedad de ingredientes sabrosos y aromáticos.</p>
          <div class="cta-wrap_tarjeta-rest">
            <div class="precio_tarjeta-rest">
              <span>$9.000</span>
            </div>
            <div class="cta_tarjeta-rest">
              <a href="hacerpedido.html">Pedir ahora</a>
            </div>
          </div>
        </div>  
      </div>
      <div style="background:url(imagenes/salchi.jpg)center;background-size: cover;" class="tarjeta-rest">
        <div class="wrap-text_tarjeta-rest">
          <h3>Salchipapas-SP</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos aliquid iure animi, quos tempora voluptas.</p>
          <div class="cta-wrap_tarjeta-rest">
            <div class="precio_tarjeta-rest">
              <span>$14.000</span>
            </div>
            <div class="cta_tarjeta-rest">
              <a href="hacerpedido.html">Pedir ahora</a>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </section>
  <!-- Menu Restaurante -->
  <section class="wrap section">
    <div class="wrap-title-section">
      <h2>Menús de Nuestro Restaurante</h2>
    </div>
    <div class="column-3 columns">
      <div style="background: url(imagenes/MENUNCITO.jpg) center;background-size: cover;" class="menu-restaurante">
        <h3>Pasabocas de Gusto</h3>
      <hr>
      <h4>Empanadas</h4>
      <p>Empanadas de Carne</p>
      <p>Empanadas de Pollo</p>
      <p>Empanadas Mixtas</p>
      <br>
      <h4>Pasteles</h4>
      <p>Pateles de Pollo</p>
      <p>Pateles de Carne</p>
      <p>Pateles Mixtos</p>
      <br>
      <h4>Buñuelos</h4>
      <br>
      <h4>Almojabanas</h4>
      <br>
      </div>
      <div style="background: url(imagenes/MENUNCITO.jpg) center;background-size: cover;" class="menu-restaurante">
      <h3>Bebidas</h3>
      <hr>
      <h4>Refrescos</h4>
      <p>Coca-Cola</p>
      <p>Pepsi</p>
      <p>Postobon</p>
      <p>Colombiana</p>
      <br>
      <h4>Cafés</h4>
      <p>Café negro</p>
      <p>Café con Leche</p>
      <p>Capuchino</p>
      <p>Café espresso</p>
      <br>
      <h4>Bebidas Energéticas</h4>
      <br>
      </div>
      <div style="background: url(imagenes/MENUNCITO.jpg) center;background-size: cover;" class="menu-restaurante">
        <h3>Coapetit</h3>
    <hr>
    <h4>Sandwiches</h4>
      <p>Bocadillo de jamón y queso</p>
      <p>Sandwich de atún</p>
      <br>
      <h4>Hamburguesas</h4>
      <p>Hamburguesa clásica</p>
      <p>Hamburguesa de pollo</p>
      <br>
      <h4>Pizzas</h4>
      <p>Pizza Hawaiana</p>
      <p>Pizza Vegetariana</p>
      <br>
      <h4>Salchipapas</h4>
      </div>
    </div>
  </section>
   <!-- Galería de imágenes -->
   <section class="section">
    <div class="wrap-title-section">
      <h2>Galería de imágenes</h2>
    </div>
    <div class="column-4 galeria-platos">
      <div class="imagen-galeria">
        <img src="Galia/Argen.jpeg" alt="">
      </div>
      <div class="imagen-galeria">
        <img src="Galia/Oscuro.webp" alt="">
      </div>
      <div class="imagen-galeria">
        <img src="Galia/viaje.jpg" alt="">
      </div>
      <div class="imagen-galeria">
        <img src="Galia/barco.webp" alt="">
      </div>
      <div class="imagen-galeria">
        <img src="Galia/cacha.webp" alt="">
      </div>
      <div class="imagen-galeria">
        <img src="Galia/mar.jpg" alt="">
      </div>
      <div class="imagen-galeria">
        <img src="Galia/mirador.avif" alt="">
      </div>
      <div class="imagen-galeria">
        <img src="Galia/poste.webp" alt="">
      </div>
      <div class="imagen-galeria">
        <img src="Galia/ten.jpg" alt="">
      </div>
      
    </div>
  </section>

  <!-- Articulos de Blog  -->
  <section class="section">
    <div class="wrap-title-section" id="Blog">
      <h2>Artículos del Blog</h2>
    </div>
    <div class="card-wrap">
      <article class="card">
        <header class="header-card">
          <img src="Blogim/REST.jpg" alt="">
        </header> 
        <footer class="footer-card">
          <div class="categoria-card">
            <span>¿Dónde?</span>
          </div>
          <div class="texto-card">
            <h3>De donde es Ushuaia</h3>
            <p>Ushuaia es una empresa, sucursal de comidas rapidas la cual esta dando un boom en el ambito de la gastronomia por sus excelentes productos y clientes satisfechos.</p>
          </div>
          <div class="perfil-card">
            <div class="img-perfil-card">
              <img src="img-perfil/perf.jpg" alt="">
            </div>
            <div class="text-perfil-card">
              <span>Kevin Stev Pinzon Rodriguez</span>
              <span>21/06/2023</span>
            </div>
          </div>
        </footer>
      </article>
      <article class="card">
        <header class="header-card">
          <img src="Blogim/tho.jpg" alt="">
        </header>
        <footer class="footer-card">
          <div class="categoria-card">
            <span>¿Por qué?</span>
          </div>
          <div class="texto-card">
            <h3>Por que su nombre</h3>
            <p>Ushuaia ciudad que fue fundada el 12 de octubre de 1884 por Augusto Lasserre como Fuerte Ushuaia sobre el asentamiento de la antigua misión anglicana de Thomas Bridges.</p>
          </div>
          <div class="perfil-card">
            <div class="img-perfil-card">
              <img src="img-perfil/gru.jpg" alt="">
            </div>
            <div class="text-perfil-card">
              <span>Kevin Ricardo Vargas Ceballos</span>
              <span>21/06/2023</span>
            </div>
          </div>
        </footer>
      </article>
      <article class="card">
        <header class="header-card">
          <img src="Blogim/bogo.jpeg" alt="">
        </header>
        <footer class="footer-card">
          <div class="categoria-card">
            <span>Futuro</span>
          </div>
          <div class="texto-card">
            <h3>Que planean a futuro</h3>
            <p>Con nuestra empresa de comidas rapidas esperamos seguir avanzando y creciendo en el ambito de la gastronomia tambien en el ambito tecnologico y con esto se piensa llegar a estar a un nivel alto para llegar con nuestras increibles resetas a toda Bógota.</p>
          </div>
          <div class="perfil-card">
            <div class="img-perfil-card">
              <img src="img-perfil/yoda.jpg" alt="">
            </div>
            <div class="text-perfil-card">
              <span>Ever Steven Alarcon</span>
              <span>21/06/2023</span>
            </div>
          </div>
        </footer>
      </article>
    </div>
  </section>
  <footer class="footer">
    <div class="wrap-footer">
      <div class="text-element-footer element-footer">
        <h3>Nuestro Restaurante</h3>
        <p>Bienvenido a nuestro vibrante mundo de sabores. Descubre un paraíso de comidas rápidas, donde la calidad se une a la conveniencia. Deliciosas opciones que satisfacen todos los antojos, servidas con rapidez y amor. ¡Déjate llevar por una experiencia gastronómica inolvidable!</p>
      </div>
      <div class="text-element-footer element-footer">
        <h5>Dirección</h5>
        <ul>
          <li>Cra 78F #58 Q-03</li>
          <li>Población - Bosa</li>
          <li>Movil: (+57) 319 2211831</li>
          <li>  Correo: ushuaiaGOD@gmail.com</li>
        </ul>
      </div>
      <div class="text-element-footer element-footer">
        <h5>Más información</h5>
        <ul>
          <li><a href="/">Inicio</a></li>
          <li><a href="/">Nosotros</a></li>
          <li><a href="/">Carta</a></li>
          <li><a href="/">Blog</a></li>
          <li><a href="/">Contacto</a></li>
        </ul>
      </div>
      <div class="rrss-element-footer element-footer">
        <h5>Redes Sociales</h5>
        <ul>
          <li><a href="/">
            <img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtNTEyIDc1djM2MmMwIDQxLjM5ODQzOC0zMy42MDE1NjIgNzUtNzUgNzVoLTEyMWwtMzAtMzBoLTMwbC0zMCAzMGgtMTUxYy00MS4zOTg0MzggMC03NS0zMy42MDE1NjItNzUtNzV2LTM2MmMwLTQxLjM5ODQzOCAzMy42MDE1NjItNzUgNzUtNzVoMzYyYzQxLjM5ODQzOCAwIDc1IDMzLjYwMTU2MiA3NSA3NXptMCAwIiBmaWxsPSIjNzk4NGViIi8+PHBhdGggZD0ibTUxMiA3NXYzNjJjMCA0MS4zOTg0MzgtMzMuNjAxNTYyIDc1LTc1IDc1aC0xMjFsLTMwLTMwaC0xNXYtNDgyaDE2NmM0MS4zOTg0MzggMCA3NSAzMy42MDE1NjIgNzUgNzV6bTAgMCIgZmlsbD0iIzQ2NjFkMSIvPjxwYXRoIGQ9Im0zMTYgMTgwdjYwaDkwbC0xNSA5MGgtNzV2MTgyaC05MHYtMTgyaC02MHYtOTBoNjB2LTYwYzAtMzMuMzAwNzgxIDE4LjMwMDc4MS02Mi40MDIzNDQgNDUtNzggMTMuMTk5MjE5LTcuNSAyOC44MDA3ODEtMTIgNDUtMTJoOTB2OTB6bTAgMCIgZmlsbD0iI2VjZWNmMSIvPjxwYXRoIGQ9Im0zMTYgMTgwdjYwaDkwbC0xNSA5MGgtNzV2MTgyaC00NXYtNDEwYzEzLjE5OTIxOS03LjUgMjguODAwNzgxLTEyIDQ1LTEyaDkwdjkwem0wIDAiIGZpbGw9IiNlMmUyZTciLz48L3N2Zz4=" alt="icono redes sociales">
          </a></li>
          <li><a href="">
            <img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIC0zMSA1MTIgNTEyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0yMTEgMjcwLTQwLjkxNzk2OSA0My42NzU3ODEgMTAuOTE3OTY5IDc2LjMyNDIxOSAxMjAtOTB6bTAgMCIgZmlsbD0iIzAwYzBmMSIvPjxwYXRoIGQ9Im0wIDE4MCAxMjEgNjAgOTAgMzAgMjEwIDE4MCA5MS00NTB6bTAgMCIgZmlsbD0iIzc2ZTJmOCIvPjxwYXRoIGQ9Im0xMjEgMjQwIDYwIDE1MCAzMC0xMjAgMjEwLTE4MHptMCAwIiBmaWxsPSIjMjVkOWY4Ii8+PC9zdmc+" alt="icono redes sociales">
          </a></li>
          <li><a href="">
            <img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMjU2IDBjLTE0MC42OTkyMTkgMC0yNTYgMTE1LjMwMDc4MS0yNTYgMjU2IDAgNDYuNSAxMi41OTc2NTYgOTEuNSAzNi4zMDA3ODEgMTMxLjEwMTU2MmwtMzYuMzAwNzgxIDEyNC44OTg0MzggMTI0Ljg5ODQzOC0zNi4zMDA3ODFjMzkuNjAxNTYyIDIzLjY5OTIxOSA4NC42MDE1NjIgMzYuMzAwNzgxIDEzMS4xMDE1NjIgMzYuMzAwNzgxIDE0MC42OTkyMTkgMCAyNTYtMTE1LjMwMDc4MSAyNTYtMjU2cy0xMTUuMzAwNzgxLTI1Ni0yNTYtMjU2em0wIDAiIGZpbGw9IiMwMGRkN2IiLz48cGF0aCBkPSJtNTEyIDI1NmMwIDE0MC42OTkyMTktMTE1LjMwMDc4MSAyNTYtMjU2IDI1NnYtNTEyYzE0MC42OTkyMTkgMCAyNTYgMTE1LjMwMDc4MSAyNTYgMjU2em0wIDAiIGZpbGw9IiMwMGNjNzEiLz48cGF0aCBkPSJtNDE3LjE5OTIxOSAzNjQuMzAwNzgxLTEyIDExLjY5OTIxOWMtMTYuODAwNzgxIDE2LjgwMDc4MS01NS44MDA3ODEgMTUuNTk3NjU2LTgwLjY5OTIxOSAxMC44MDA3ODEtMjIuMTk5MjE5LTQuMTk5MjE5LTQ2LTE0LjEwMTU2Mi02OC41LTI3LjkwMjM0My02MS4xOTkyMTktMzcuMTk5MjE5LTExNi42OTkyMTktMTAzLjE5OTIxOS0xMzAuMTk5MjE5LTE2Mi41OTc2NTctOS4zMDA3ODEtNDAuMjAzMTI1LTQuMTk5MjE5LTc1IDktODguNWwxMi0xMmM2LjYwMTU2My02LjMwMDc4MSAxNy4wOTc2NTctNi4zMDA3ODEgMjMuNjk5MjE5IDBsNDcuNjk5MjE5IDQ3LjY5OTIxOWMzLjMwMDc4MSAzLjMwMDc4MSA1LjEwMTU2MiA3LjUgNS4xMDE1NjIgMTJzLTEuODAwNzgxIDguNjk5MjE5LTUuMTAxNTYyIDEybC0xMiAxMS42OTkyMTljLTEyLjg5ODQzOCAxMy4xOTkyMTktMTIuODk4NDM4IDM0LjUgMCA0Ny42OTkyMTlsNDkuODAwNzgxIDQ4LjkwMjM0MyAyOS4wOTc2NTYgMjguODAwNzgxYzEzLjIwMzEyNSAxMy4xOTkyMTkgMzUuNTAzOTA2IDEzLjE5OTIxOSA0OC43MDMxMjUgMGwxMS42OTkyMTktMTIuMDAzOTA2YzYuMzAwNzgxLTYgMTcuNjk5MjE5LTYgMjQgMGw0Ny42OTkyMTkgNDcuNzAzMTI1YzYuMzAwNzgxIDYuNTk3NjU3IDYuNjAxNTYyIDE3LjA5NzY1NyAwIDI0em0wIDAiIGZpbGw9IiNlY2VjZjEiLz48cGF0aCBkPSJtNDE3LjE5OTIxOSAzNjQuMzAwNzgxLTEyIDExLjY5OTIxOWMtMTYuODAwNzgxIDE2LjgwMDc4MS01NS44MDA3ODEgMTUuNTk3NjU2LTgwLjY5OTIxOSAxMC44MDA3ODEtMjIuMTk5MjE5LTQuMTk5MjE5LTQ2LTE0LjEwMTU2Mi02OC41LTI3LjkwMjM0M3YtODMuMDk3NjU3bDI5LjA5NzY1NiAyOC44MDA3ODFjMTMuMjAzMTI1IDEzLjE5OTIxOSAzNS41MDM5MDYgMTMuMTk5MjE5IDQ4LjcwMzEyNSAwbDExLjY5OTIxOS0xMi4wMDM5MDZjNi4zMDA3ODEtNiAxNy42OTkyMTktNiAyNCAwbDQ3LjY5OTIxOSA0Ny43MDMxMjVjNi4zMDA3ODEgNi41OTc2NTcgNi42MDE1NjIgMTcuMDk3NjU3IDAgMjR6bTAgMCIgZmlsbD0iI2UyZTJlNyIvPjwvc3ZnPg==" alt="icono redes sociales">
          </a></li>
        </ul>
      </div>
    </div>
    <div class="footer-creds">
      <div class="copy-creds">
        <p>©2023 · Todos los derechos reservados.</p>
      </div>
      <div class="legal-creds">
        <ul>
          <li><a href="">Política de Privacidad</a></li>
          <li><a href="">Política de Cookies</a></li>
          <li><a href="">Aviso Legal</a></li>
        </ul>
      </div>
    </div>
  </footer>
  
</body>
</html>
</body>
    </body>
</html>