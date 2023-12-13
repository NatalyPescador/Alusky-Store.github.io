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
                            <button  onclick="location.href='../Iniciar Sesion/index.html'" class="log_in_button">Iniciar Sesión</button>
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
                            <!-- <li><a href="../Personalizar/index.html">Personalizar</a></li> -->
                            <li><a href="../Preguntas Frecuentes/index.html">Preguntas Frecuentes</a></li>
                        </ul> 
                        <hr class="line__bar"> 
                    </div>
                </div>
            </nav>
            <script src="../showMenu.js"></script>
        </header>
        <main>
            <section class="sign_up">
                <div class="sign_up_container">
                    <form method="post" class="sign_up_form">
                        <div class="sign_up_icons">
                            <img src="../Iconos/padlock.png" class="padlock_icon">
                            <img src="../Imagenes/LOGO.jpg" class="logo_icon" alt="Logo de Alusky Store">
                        </div>
                        <h1>Registrarse</h1>
                        <div class="links">
                            <a href="../Iniciar Sesion/index.html">¿Ya estás registrado? Accede</a>
                        </div>
                        <input id="name_sign-up" type="text" placeholder="Nombre" name="name">
                        <input id="email_sign-up" type="email" placeholder="Correo electrónico" name="email">
                        <input id="confirm_email_sign-up" type="email" placeholder="Confirme correo electrónico" name="validar_email">
                        <input id="password_sign-up" type="password" placeholder="Contraseña" name="password">
                        <?php
                        include("../Iniciar Sesion/conexionBBDD.php");
                        include("controlador_registro.php");
                        ?>
                        <div class="social_media">
                            <img src="../Iconos/gmail.png">
                            <img src="../Iconos/facebook.png">
                        </div>
                        <input class="sign_in_btn" type="submit" name="sigIn_button" value="Registrarse">
                    </form>
                </div>
            </section>
            <a href="https://wa.me/3245045027/?text=Me%20gustaría%20obtener%20más%20información%20acerca%20de%20sus%20productos"  class="Whatsapp_Link" target="_blank"><img src="../Iconos/WhatsappFixed.png" class="Whatsapp_Fixed"></a>
        </main>  
    </body>
</html>