<!DOCTYPE html>
<?php 
session_start();
 
if (isset($_REQUEST["vaciar"])) {
    unset($_SESSION["carrito"]);
    header("Location:Carrito.php");
}

if(isset($_REQUEST["item"])) {
    $producto = $_REQUEST["item"];
    unset($_SESSION["carrito"][$producto]);
    header("Location:Carrito.php");
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
                        <button type="button" class="nav_bar_button shopping_cart" onclick="location.href='Carrito.php'">
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
                        <!-- <li><a href="../../Personalizar/index.html">Personalizar</a></li> -->
                        <li><a href="../../Preguntas Frecuentes/index.html">Preguntas Frecuentes</a></li>
                    </ul> 
                    <hr class="line__bar"> 
                </div>
            </div>
        </nav>
        <script src="../../showMenu.js"></script>
    </header>
    <main>
        <button type="button" class="back_button" onclick="location.href='../Vistas/Catalogo.php'">
            <img src="../../Iconos/back.png" class="back_icon">
            Regresar
        </button>
        <div class="bill_main">
            <div class="bill_container">
                <h1 class="bill_title">Carrito de Compras</h1>
                    <?php
                        $totalCompra = 0;

                        if(isset($_SESSION["carrito"])) {
                            echo '<table class="bill_table">';
                            echo '<tr>';
                            echo '<th>Imagen</th>';
                            echo '<th>Artículo</th>';
                            echo '<th>Cantidad</th>';
                            echo '<th>Precio Unitario</th>';
                            echo '<th>Subtotal</th>';
                            echo '<th>Borrar</th></tr>';

                            foreach($_SESSION["carrito"] as $indice=>$arreglo) {
                                if(isset($arreglo["imagen"])) {
                                    echo "<tr><td><img src='../Productos Alusky/" . $arreglo["imagen"] . "' class='bill_images'></td>";
                                }
                                echo "<td>" . $indice . "</td>";
                                $subtotalProducto = $arreglo["cantidad"] * $arreglo["precio"];
                                $totalCompra += $subtotalProducto; 
                                echo "<td>" . $arreglo["cantidad"] . "</td>";
                                echo "<td>" . number_format($arreglo["precio"], 0, '.', '.') . " COP </td>"; 
                                echo "<td>" . number_format($subtotalProducto, 0, '.', '.') . " COP </td>"; 
                                echo "<td><a href='Carrito.php?item=$indice'><img src='../../Iconos/eliminar.png' class='bin_icon'></a></td></tr>";
                            }

                            echo "</table>";
                            echo "<div class='total'><span class='span1'>Total de la compra</span> <span class='span2'>" . number_format($totalCompra, 0, '.', '.') . " COP</span></div>";
                            echo '<div class="buttons_container"> <a href="carrito.php?vaciar=true" class="bill_buttons">Vaciar carrito</a>';
                            echo '<input type="submit" name="compra" value="Continuar pedido" class="bill_buttons"></div>';

                        } else {
                            echo "El carrito está vacío";
                        }
                    ?>
            </div>
        </div>
    </main>
</body>
</html>

