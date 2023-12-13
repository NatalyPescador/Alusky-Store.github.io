<?php
session_start();
if ($_SESSION['login'] == false) {
    header("location:../Iniciar Sesion/login.php");
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../header_style.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="../footer_style.css">
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
                            <?php
                                if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['cerrarSesion'])) {
                                    $_SESSION['login'] = false;
                                    header("location:../Iniciar Sesion/index.html");
                                    exit();
                                }
                            ?>
                            <a class="sign_in_button" href="?cerrarSesion">Cerrar Sesion</a>
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
            <section class="my_account">
                <div class="account_info_container">
                    <h1>Mi cuenta</h1>
                    <div class="account_options">
                        <div class="options_info">
                            <h2>Mis diseños</h2>
                            <p>Ver, editar y ordenar tus diseños guardados</p>
                        </div>
                        <div class="icon_access">
                            <a href="Opciones de Cuenta/Mis Diseños/index.php">
                                <img src="../Iconos/right-arrow.png" alt="access_icon">
                            </a>
                        </div>
                    </div>
                    <div class="account_options">
                        <div class="options_info">
                            <h2>Historial de pedidos</h2>
                            <p>Ver y rastrear tus pedidos anteriores</p>
                        </div>
                        <div class="icon_access">
                            <a href="Opciones de Cuenta/Historial de Pedidos/index.php">
                                <img src="../Iconos/right-arrow.png" alt="access_icon">
                            </a>
                        </div>
                    </div>
                    <div class="account_options">
                        <div class="options_info">
                            <h2>Mis imágenes</h2>
                            <p>Ver y borrar tus imágenes subidas</p>
                        </div>
                        <div class="icon_access">
                            <a href="Opciones de Cuenta/Mis Imagenes/index.php">
                                <img src="../Iconos/right-arrow.png" alt="access_icon">
                            </a>
                        </div>
                    </div>
                    <div class="account_options">
                        <div class="options_info">
                            <h2>Información de cuenta</h2>
                            <p>Actualiza el nombre y el correo electrónico asociado a tu cuenta</p>
                        </div>
                        <div class="icon_access">
                            <a href="Opciones de Cuenta/Información de Cuenta/index.php">
                                <img src="../Iconos/right-arrow.png" alt="access_icon">
                            </a>
                        </div>
                    </div>
                    <div class="account_options">
                        <div class="options_info">
                            <h2>Cambiar contraseña</h2>
                            <p>Cambia la contraseña asociada a tu cuenta</p>
                        </div>
                        <div class="icon_access">
                            <a href="Opciones de Cuenta/Cambiar Contraseña/index.php">
                                <img src="../Iconos/right-arrow.png" alt="access_icon">
                            </a>
                        </div>
                    </div>
                    <div class="account_options">
                        <div class="options_info">
                            <h2>Tus direcciones</h2>
                            <p>Agrega, edita o borra tus direcciones de entrega</p>
                        </div>
                        <div class="icon_access">
                            <a href="Opciones de Cuenta/Direcciones/index.php">
                                <img src="../Iconos/right-arrow.png" alt="access_icon">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="footer_container">
                <a href="../index.html"><img src="../Imagenes/LOGO.jpg" alt="Logo de la marca" class="logo_image"></a>
                <div class="lists_container">
                    <div class="products_list">
                        <ul>
                            <li>Nuestros Productos</li>
                            <li><a href="../Catálogo/index.html">Catálogo</a></li>
                            <li><a href="../Ropa/index.html">Ropa</a></li>
                            <li><a href="../Accesorios/index.html">Accesorios</a></li>
                        </ul>
                    </div>
                    <div class="social_list">
                        <ul>
                            <li class="item-list3">Redes Sociales</li>
                        </ul>
                        <div class="social_media_images">
                            <a href="https://www.instagram.com/alusky_store/" target="_blank"><img src="../Iconos/instagram.png"></a>
                            <a href="https://api.whatsapp.com/send?phone=%2B573133195045&data=AWBiZ8hvcQHLLCHOBPcjNP2Y2Z8PUpnIZ6uO4fu22WoL1RPmE99TUrbjGeXCGZw7fJBbWfv3NBk4iGbt_5CJQWrn3VZrjowycmKbrH_A46UbbUPlwdGGGoLel1WghFHb9fR-QlcbCxcuO4FjwFopbCV2aBuw1kQqgrzdZxdAUuWjxH2ue72tIu1FQWv0bW4SSdc0V_noVryxl6Rs_8Myr26zBxy1C9dtjK0uIi-1H4ORunm0ZxUDDcVpE68WgT-_7_7syImikr_mK244FJH25F9XqEfP3R8Uugm1ZNdLBt1X4V4DEq4&source=FB_Page&app=facebook&entry_point=page_cta&fbclid=IwAR3phOCq_V4DO2aTMNqnDPTunju5I3LDUe8w2QnA_bfRseAGQewGA2GQ7ec" target="_blank"><img src="../Iconos/whatsapp.png"></a>
                            <a href="https://www.facebook.com/profile.php?id=100075797061046" target="_blank"><img src="../Iconos/facebook-white.png"></a>
                        </div>
                    </div>
                    <div class="contact_list">
                        <ul>
                            <li>Contactanos</li>
                            <li><img src="../Iconos/Phone.png" class="phone_img">&nbsp +57 313 319 5045</li>
                            <li><img src="../Iconos/mail.png" class="mail_img">&nbsp aluskystore@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="brand_container">
                    <hr class="line__bar">
                    <p>Copyright © 2023 Alusky Store</p>
                </div>
            </div>
        </footer>
    </body>
</html>