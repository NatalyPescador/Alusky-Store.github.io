<!DOCTYPE html>
<?php 
session_start();
$lista=$_SESSION["lista"];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../header_style.css">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;500&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../../favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alusky Store</title>
</head>
<body>
    <header>
        <nav class="nav_bar">
            <div class="header_container">
                <div class="top_header">
                    <div class="left_header">
                        <a href="../../index.html" class="logo_img">
                            <img src="../../Imagenes/LOGO.jpg" alt="Logo de Alusky Store">
                        </a>
                        <input type="text" placeholder="Buscar en Alusky" class="search_bar">
                    </div>
                    <div class="right_header">
                        <button  onclick="location.href='../../Iniciar Sesion/index.html'" class="log_in_button">Iniciar Sesión</button>
                        <button onclick="location.href='../../Registrarse/index.html'" class="sign_in_button">Registrarse</button>
                        <button type="button" class="nav_bar_button shopping_cart" onclick="location.href='../../Carrito de Compras/index.html'">
                            <img src="../../Iconos/Carrito de Compras.png">
                        </button>
                        <button type="button" class="nav_bar_button dropdown_menu" id="dropdown_menu">
                            <img src="../../Iconos/menu.png" alt="menu desplegable">
                        </button>
                    </div>
                </div>
                <div class="nav_list" id="menu">
                    <button type="button" class="close_button" id="close_button">
                        <img src="../../Iconos/close.png" class="close_icon">
                    </button>
                    <a href="../../Iniciar Sesion/index.html" class="link_account">Mi Cuenta</a>
                    <ul class="nav_menu">
                        <li><a href="../../index.html">Inicio</a></li>
                        <li><a href="../index.html">Catálogo</a></li>
                        <li><a href="../../Accesorios/index.html">Accesorios</a></li>
                        <li><a href="../../Personalizar/index.html">Personalizar</a></li>
                        <li><a href="../../Preguntas Frecuentes/index.html">Preguntas Frecuentes</a></li>
                    </ul> 
                    <hr class="line__bar"> 
                </div>
            </div>
        </nav>
        <script src="../../showMenu.js"></script>
    </header>
    <main>
        <button type="button" class="filter_button filter_menu" id="filter_menu">
            <img src="../../Iconos/filter.png" alt="menu desplegable" class="filter_icon">
        </button>
        <div class="root_container">
            <div class="filter_container" id="filter_container">
                <button type="button" class="close_btn" id="close_btn">
                    <img src="../../Iconos/close.png" class="close_icon">
                </button>
                <ul class="catalog_menu">
                    <li><a href="Catalogo.php" class="underlined_link">Todos los productos</a></li>
                    <li><a href="Buzos.php">Buzos</a></li>
                    <li><a href="Camisetas.php">Camisetas</a></li>
                    <li><a href="Sudaderas.php">Sudaderas</a></li>
                    <li><a href="Pijamas.php">Pijamas</a></li>
                    <li><a href="RopaN.php">Ropa Niños</a></li>
                    <li><a href="Accesorios.php">Accesorios</a></li>
                </ul>
            </div>
            <script src="../showFilterContainer.js"></script>
            <div class="catalog_container">
                <?php
                foreach ($lista as $reg) {
                    ?>
                <div class="product_container">
                    <img src="../Productos Alusky/<?php echo $reg[4];?>" class="products">
                    <button type="button" onclick="enviar(<?php echo $reg[0];?>)" class="product_button">Agregar</button>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>
    <script>
        function enviar(codigo) {
            location.href="Detalle.php?cod=" + codigo;
        }
    </script>
</body>
</html>