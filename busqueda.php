<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //if (!isset($_POST["buscar"])) {$_POST['buscar']= '';}
    ?>
        <!-- <header>
            <nav class="nav_bar">
                <div class="header_container">
                    <div class="top_header">
                        <div class="left_header">
                            <a href="index.html" class="logo_img">
                                <img src="Imagenes/LOGO.jpg" alt="Logo de Alusky Store">
                            </a>
                            <input type="text" placeholder="Buscar en Alusky" class="search_bar" -->
                             <!-- id="buscar" name="buscar" value="<?php echo $_POST['buscar']?>"> -->
                            <!-- <input type="submit" name="buscar" id="buscar" value="buscar"> -->
                        <!-- </div>
                        <div class="right_header">
                            <button  onclick="location.href='Iniciar Sesion/index.html'" class="log_in_button">Iniciar Sesión</button>
                            <button onclick="location.href='Registrarse/index.html'" class="sign_in_button">Registrarse</button>
                            <button type="button" class="nav_bar_button shopping_cart" onclick="location.href='Carrito de Compras/index.html'">
                                <img src="Iconos/Carrito de Compras.png">
                            </button>
                            <button type="button" class="nav_bar_button dropdown_menu" id="dropdown_menu">
                                <img src="Iconos/menu.png" alt="menu desplegable">
                            </button>
                        </div>
                    </div>
                    <div class="nav_list" id="menu">
                        <button type="button" class="close_button" id="close_button">
                            <img src="Iconos/close.png" class="close_icon">
                        </button>
                        <a href="Iniciar Sesion/index.html" class="link_account">Mi Cuenta</a>
                        <ul class="nav_menu">
                            <li><a href="index.html">Inicio</a></li>
                            <li><a href="Catálogo/index.html">Catálogo</a></li>
                            <li><a href="Accesorios/index.html">Accesorios</a></li>
                            <li><a href="Personalizar/index.html">Personalizar</a></li>
                            <li><a href="Preguntas Frecuentes/index.html">Preguntas  Frecuentes</a></li>
                        </ul> 
                        <hr class="line__bar"> 
                    </div>
                </div>
            </nav>
            <script src="showMenu.js"></script>
        </header>
        <main>
            <section>
                <form id="form2" name="form2" method="post" action="busqueda.php">
                    <div>
                        <label>Busqueda Rapida</label>
                    <input type="text" placeholder="Buscar en Alusky" 
                     class="search_bar" id="buscar" name="buscar" value="<?php echo $_POST['buscar']?>">
                    </div>

                </form>
            </section>
        </main> -->
        //filtro de busqueda
    <?php 
    // if ($_POST['buscar'] == '') {$_POST['buscar']= '';}
    // $akeyword= explode(',',$_POST['buscar']); 
    ?>
</body>
</html>