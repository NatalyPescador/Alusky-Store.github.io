<?php
session_start();

$total = 0;
if(isset($_SESSION["carrito"])) {
    foreach($_SESSION["carrito"] as $indice=>$arreglo) {
        echo "<hr>Producto: " . $indice . "<br>";
        $total += $arreglo["cantidad"] * $arreglo["precio"];
        foreach($arreglo as $key => $value) {
            echo $key . ": " . $value . "<br>";
        }
        echo "<a href='Carrito.php?item=$indice'>Eliminar</a><br><br>";
    }
echo "<b>Total de la compra: </b>$total";
echo '<br><a href="carrito.php?vaciar=true">Vaciar carrito</a>';
echo '<br><a href="Catalogo.php">Regresar</a>';

} else {
    echo "El carrito está vacio";
    echo '<br><a href="Catalogo.php">Regresar</a>';
}

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


