<!DOCTYPE html>
<?php

include "../Data Access Object (DAO)/metodosDAO.php";
$codigo=$_REQUEST["codigo"];

$objMetodos = new MetodosDAO();
$lista = $objMetodos->ListarAccesoriosCod($codigo);

foreach ($lista as $row) {
    $nombre=$row[1];
    $precio=$row[2];
    $detalle=$row[3];
    $imagen=$row[4];
}

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
        <button type="button" class="back_button" onclick="location.href='../Vistas/Accesorios.php'">
            <img src="../../Iconos/back.png" class="back_icon">
            Regresar
        </button>
        <div class="product_details_container">
            <div class="product_img_container">
                <div><img src="../Productos Alusky/<?php echo $imagen;?>" class="product_img"></div>
            </div>
            <div class="info_container">
                <div><?php echo $nombre; ?></div>
                <div><?php echo $detalle; ?></div>
                <div><?php echo $precio; ?></div>
                <div><label>Ingrese Cantidad:</label><input type="number" min="1" max="100" value="1" name="cantidad" class="number"></div>
                <div class="buttons_container">
                    <button type="button" id="cerrar" class="product_button">Cerrar</button>
                    <button type="button" class="product_button">Agregar al carrito</button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>