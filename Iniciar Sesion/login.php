<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../header_style.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;500&display=swap" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="../favicon.ico">
        <title>Alusky Store</title>
    </head>
    <body>
        <header>
            <nav class="nav_bar">
                <div class="header_container">
                    <div class="top_header">
                        <div class="left_header">
                            <a href="../index.html" class="logo_img">
                                <img src="../Imagenes/LOGO.jpg" alt="Logo de Alusky Store">
                            </a>
                            <input type="text" placeholder="Buscar en Alusky" class="search_bar">
                        </div>
                        <div class="right_header">
                            <button  onclick="location.href='index.html'" class="log_in_button">Iniciar Sesión</button>
                            <button onclick="location.href='../Registrarse/index.html'" class="sign_in_button">Registrarse</button>
                            <button type="button" class="nav_bar_button shopping_cart" onclick="location.href='../Carrito de Compras/index.html'">
                                <img src="../Iconos/Carrito de Compras.png">
                            </button>
                            <button type="button" class="nav_bar_button dropdown_menu" id="dropdown_menu">
                                <img src="../Iconos/menu.png" alt="menu desplegable">
                            </button>
                        </div>
                    </div>
                    <div class="nav_list" id="menu">
                        <button type="button" class="close_button" id="close_button">
                            <img src="../Iconos/close.png" class="close_icon">
                        </button>
                        <a href="../Iniciar Sesion/index.html" class="link_account">Mi Cuenta</a>
                        <ul class="nav_menu">
                            <li><a href="../index.html">Inicio</a></li>
                            <li><a href="../Catálogo/index.html">Catálogo</a></li>
                            <li><a href="../Accesorios/index.html">Accesorios</a></li>
                            <li><a href="../Personalizar/index.html">Personalizar</a></li>
                            <li><a href="../Preguntas Frecuentes/index.html">Preguntas Frecuentes</a></li>
                        </ul> 
                        <hr class="line__bar"> 
                    </div>
                </div>
            </nav>
            <script src="../showMenu.js"></script>
        </header>
        <main>
            <section class="sign_in">
                <div class="sign_in_container">
                    <form method="post" class="sign_in_form">
                        <div class="sign_in_icons">
                            <img src="../Iconos/padlock.png" class="padlock_icon">
                            <img src="../Imagenes/LOGO.jpg" class="logo_icon" alt="Logo de Alusky Store">
                        </div>
                        <h1>Iniciar Sesión</h1>
                        <input id="email_sign-in" type="email" placeholder="Correo electrónico" name="email">
                        <input id="password_sign-in" type="password" placeholder="Contraseña" name="password">
                            <?php
                            include "conexionBBDD.php";
                            include "controlador.php";
                            ?>
                        <div class="remember_me">
                            <label for="remember_me_label">Recuerdame</label>
                            <input id="remember_me_input" type="checkbox">
                        </div>
                        <div class="social_media">
                            <img src="../Iconos/gmail.png">
                            <img src="../Iconos/facebook.png">
                        </div>
                        <input type="submit" class="login_button" name="logIn_button" value="Iniciar Sesión">
                        <div class="links">
                            <a href="../Registrarse/index.html">¿No tienes una cuenta?</a>
                            <a href="../Olvidar Contraseña/index.html">¿Se te olvido tu contraseña?</a>
                        </div>
                    </form>
                </div>
            </section>
        </main>  
    </body>
</html>
