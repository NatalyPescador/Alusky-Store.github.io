<!DOCTYPE html>
<?php
session_start();

include "../Data Access Object (DAO)/metodosDAO.php";
$codigo=$_REQUEST["codigo"];

$objMetodos = new MetodosDAO();
$lista = $objMetodos->ListarSudaderasCod($codigo);

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
        <button type="button" class="back_button" onclick="location.href='Sudaderas.php'">
            <img src="../../Iconos/back.png" class="back_icon">
            Regresar
        </button>
        <div class="product_details_container">
            <div class="product_img_container">
                <div><img src="../Productos Alusky/<?php echo $imagen;?>" class="product_img"></div>
            </div>
            <div class="right_info_container">
                <div class="top_info_container">
                    <?php
        
                        if(isset($_REQUEST["agregar"])) {
                            $producto = $_REQUEST["nombre"];
                            $cantidad = $_REQUEST["cantidad"];
                            $precio = $_REQUEST["precio"];
                            $imagen = $_REQUEST["imagen"];
        
                            $_SESSION["carrito"][$producto]["imagen"] = $imagen;
                            $_SESSION["carrito"][$producto]["cantidad"] = $cantidad;
                            $_SESSION["carrito"][$producto]["precio"] = $precio;
        
                            echo "<p>Producto agregado con éxito al carrito de compras</p>";
                        }
        
                    ?>
                </div>
                <div class="form_info_container">
                    <form action="Detalles_Sudaderas.php?codigo=<?php echo $codigo; ?>" method="post">
                        <div class="info_container">
                            <input type="hidden" name="imagen" value="<?php echo $imagen;?>">
        
                            <label for="nombre"><?php echo $nombre; ?></label>    
                            <input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
        
                            <label for="detalle"><?php echo $detalle; ?></label>
                            <input type="hidden" name="detalle" value="<?php echo $detalle; ?>">
        
                            <label for="precio"><?php echo number_format($precio, 0, '.', '.') . " COP"; ?></label>
                            <input type="hidden" name="precio" value="<?php echo $precio; ?>">
        
                            <div><label>Ingrese Cantidad:</label><input type="number" min="1" max="100" value="1" name="cantidad" class="number"></div>
                            <input type="submit" class="product_button" name="agregar" value="Agregar al carrito">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <a href="https://wa.me/3245045027/?text=Me%20gustaría%20obtener%20más%20información%20acerca%20de%20sus%20productos"  class="Whatsapp_Link" target="_blank"><img src="../../Iconos/WhatsappFixed.png" class="Whatsapp_Fixed"></a>
    </main>
</body>
</html>