-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2023 a las 01:38:54
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS catalogoalusky;
USE catalogoalusky;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catalogoalusky`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesorios`
--

CREATE TABLE `accesorios` (
  `CodProducto` int(11) NOT NULL,
  `Producto` varchar(50) DEFAULT NULL,
  `Precio` varchar(12) DEFAULT NULL,
  `Detalles` varchar(50) DEFAULT NULL,
  `Imagen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `accesorios`
--

INSERT INTO `accesorios` (`CodProducto`, `Producto`, `Precio`, `Detalles`, `Imagen`) VALUES
(1, 'Bolas navideñas', '$30.000', 'Accesorio personalizable', 'Bolas navideñas.jpeg'),
(2, 'Pocillos personalizables', '$30.000', 'Accesorio personalizable', 'Pocillos personalizables.png'),
(3, 'Pocillos magicos personalizables', '$30.000', 'Accesorio personalizable', 'Pocillos magicos personalizables.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `buzos`
--

CREATE TABLE `buzos` (
  `CodProducto` int(11) NOT NULL,
  `Producto` varchar(50) DEFAULT NULL,
  `Precio` varchar(15) DEFAULT NULL,
  `Detalles` varchar(50) DEFAULT NULL,
  `Imagen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `buzos`
--

INSERT INTO `buzos` (`CodProducto`, `Producto`, `Precio`, `Detalles`, `Imagen`) VALUES
(1, 'Buzo amarillo Scooby Doo', '$80.000', 'Buzo con capota sublimado', 'Buzo amarillo Scooby Doo.png'),
(2, 'Buzo blanco iniciales', '$75.000', 'Buzo con capota sublimado', 'Buzo blanco iniciales.png'),
(3, 'Buzo blanco Piolin', '$70.000', 'Buzo sin capota sublimado', 'Buzo blanco Piolin.png'),
(4, 'Buzo Chicas Superpoderosas', '$80.000', 'Buzo con capota sublimado', 'Buzo Chicas Superpoderosas.png'),
(5, 'Buzo de SantaFe', '$75.000', 'Buzo con capota sublimado', 'Buzo de SantaFe.png'),
(6, 'Buzo dinosaurio', '$70.000', 'Buzo sin capota sublimado', 'Buzo dinosaurio.png'),
(7, 'Buzo gris Bugs Bunny', '85.000', 'Buzo con capota vinilo textil imprimible', 'Buzo gris Bugs Bunny.png'),
(8, 'Buzo Liga de la Justicia', '$80.000', 'Buzo con capota sublimado', 'Buzo Liga de la Justicia.png'),
(9, 'Buzo negro Golden State Warriors', '$75.000', 'Buzo con capota sublimado', 'Buzo negro Golden State Warriors.png'),
(10, 'Buzo niños Paw Patrol', '$55.000', 'Buzo con capota sublimado', 'Buzo niños Paw Patrol.png'),
(11, 'Buzo niños Spiderman', '$55.000', 'Buzo con capota sublimado', 'Buzo niños Spiderman.png'),
(12, 'Buzo niños Tom y Jerry', '$55.000', 'Buzo con capota sublimado', 'Buzo niños Tom y Jerry.png'),
(13, 'Buzo Pato Lucas', '$75.000', 'Buzo con capota sublimado', 'Buzo Pato Lucas.png'),
(14, 'Buzo rosado Coraje', '$75.000', 'Buzo con capota sublimado', 'Buzo rosado Coraje.png'),
(15, 'Buzo rosado Lola Bunny', '$75.000', 'Buzo con capota sublimado', 'Buzo rosado Lola Bunny.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camisetas`
--

CREATE TABLE `camisetas` (
  `CodProducto` int(11) NOT NULL,
  `Producto` varchar(50) DEFAULT NULL,
  `Precio` varchar(15) DEFAULT NULL,
  `Detalles` varchar(50) DEFAULT NULL,
  `Imagen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `camisetas`
--

INSERT INTO `camisetas` (`CodProducto`, `Producto`, `Precio`, `Detalles`, `Imagen`) VALUES
(1, 'Camiseta blanca Deff', '$30.000', 'Camiseta blanca sublimada', 'Camiseta blanca Deff.png'),
(2, 'Camiseta blanca Guns', '$30.000', 'Camiseta blanca sublimada', 'Camiseta blanca Guns.png'),
(3, 'Camiseta blanca Kiss', '$30.000', 'Camiseta blanca sublimada', 'Camiseta blanca Kiss.png'),
(4, 'Camiseta blanca Led Zeppelin', '$30.000', 'Camiseta blanca sublimada', 'Camiseta blanca Led Zeppelin.png'),
(5, 'Camiseta blanca', '$30.000', 'Camiseta blanca sublimada', 'Camiseta blanca.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE `detallepedido` (
  `numPedido` int(11) NOT NULL,
  `CodProducto` int(11) NOT NULL,
  `Cantidades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `numPedido` int(11) NOT NULL,
  `CodCliente` varchar(100) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pijamas`
--

CREATE TABLE `pijamas` (
  `CodProducto` int(11) NOT NULL,
  `Producto` varchar(50) DEFAULT NULL,
  `Precio` varchar(15) DEFAULT NULL,
  `Detalles` varchar(50) DEFAULT NULL,
  `Imagen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pijamas`
--

INSERT INTO `pijamas` (`CodProducto`, `Producto`, `Precio`, `Detalles`, `Imagen`) VALUES
(1, 'Pijama Avengers', '$65.000', 'Pijama sublimada', 'Pijama Avengers.png'),
(2, 'Pijama Los Simpson', '$65.000', 'Pijama sublimada', 'Pijama Los Simpson.jpg'),
(3, 'Pijama Osos Escandalosos', '$65.000', 'Pijama sublimada', 'Pijama Osos Escandalosos.png'),
(4, 'Pijama Spiderman', '$65.000', 'Pijama sublimada', 'Pijama Spiderman.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `CodProducto` int(11) NOT NULL,
  `Producto` varchar(100) NOT NULL,
  `Precio` varchar(10) NOT NULL,
  `Detalles` varchar(1000) NOT NULL,
  `Imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`CodProducto`, `Producto`, `Precio`, `Detalles`, `Imagen`) VALUES
(1, 'Buzo amarillo Scooby Doo', '$80.000', 'Buzo con capota sublimado', 'Buzo amarillo Scooby Doo.png'),
(2, 'Buzo blanco iniciales', '$75.000', 'Buzo con capota sublimado', 'Buzo blanco iniciales.png'),
(3, 'Buzo blanco Piolin', '$70.000', 'Buzo sin capota sublimado', 'Buzo blanco Piolin.png'),
(4, 'Buzo Chicas Superpoderosas', '$80.000', 'Buzo con capota sublimado', 'Buzo Chicas Superpoderosas.png'),
(5, 'Buzo de SantaFe', '$75.000', 'Buzo con capota sublimado', 'Buzo de SantaFe.png'),
(6, 'Buzo dinosaurio', '$70.000', 'Buzo sin capota sublimado', 'Buzo dinosaurio.png'),
(7, 'Buzo gris Bugs Bunny', '$85.000', 'Buzo con capota vinilo textil imprimible', 'Buzo gris Bugs Bunny.png'),
(8, 'Buzo Liga de la Justicia', '$80.000', 'Buzo con capota sublimado', 'Buzo Liga de la Justicia.png'),
(9, 'Buzo negro Golden State Warriors', '$75.000', 'Buzo con capota sublimado', 'Buzo negro Golden State Warriors.png'),
(10, 'Buzo niños Paw Patrol', '$55.000', 'Buzo con capota sublimado', 'Buzo niños Paw Patrol.png'),
(11, 'Buzo niños Spiderman', '$55.000', 'Buzo con capota sublimado', 'Buzo niños Spiderman.png'),
(12, 'Buzo niños Tom y Jerry', '$55.000', 'Buzo con capota sublimado', 'Buzo niños Tom y Jerry.png'),
(13, 'Buzo Pato Lucas', '$75.000', 'Buzo con capota sublimado', 'Buzo Pato Lucas.png'),
(14, 'Buzo rosado Coraje', '$75.000', 'Buzo con capota sublimado', 'Buzo rosado Coraje.png'),
(15, 'Buzo rosado Lola Bunny', '$75.000', 'Buzo con capota sublimado', 'Buzo rosado Lola Bunny.png'),
(16, 'Camiseta blanca Deff', '$30.000', 'Camiseta blanca sublimada', 'Camiseta blanca Deff.png'),
(17, 'Camiseta blanca Guns', '$30.000', 'Camiseta blanca sublimada', 'Camiseta blanca Guns.png'),
(18, 'Camiseta blanca Kiss', '$30.000', 'Camiseta blanca sublimada', 'Camiseta blanca Kiss.png'),
(19, 'Camiseta blanca Led Zeppelin', '$30.000', 'Camiseta blanca sublimada', 'Camiseta blanca Led Zeppelin.png'),
(20, 'Camiseta blanca', '$30.000', 'Camiseta blanca sublimada', 'Camiseta blanca.png'),
(21, 'Conjunto niños Spider Bar', '$55.000', 'Pijama sublimada', 'Conjunto niños Spider Bar.jpg'),
(22, 'Pijama Avengers', '$65.000', 'Pijama sublimada', 'Pijama Avengers.png'),
(23, 'Pijama Los Simpson', '$65.000', 'Pijama sublimada', 'Pijama Los Simpson.jpg'),
(24, 'Pijama Osos Escandalosos', '$65.000', 'Pijama sublimada', 'Pijama Osos Escandalosos.png'),
(25, 'Pijama Spiderman', '$65.000', 'Pijama sublimada', 'Pijama Spiderman.png'),
(26, 'Semanario Lunes', '$50.000', 'Semanario sublimado', 'Semanario Lunes.png'),
(27, 'Semanario Martes', '$50.000', 'Semanario sublimado', 'Semanario Martes.png'),
(28, 'Semanario Miercoles', '$50.000', 'Semanario sublimado', 'Semanario Miercoles.png'),
(29, 'Semanario Jueves', '$50.000', 'Semanario sublimado', 'Semanario Jueves.png'),
(30, 'Semanario Viernes', '$50.000', 'Semanario sublimado', 'Semanario Viernes.png'),
(31, 'Semanario Sabado', '$50.000', 'Semanario sublimado', 'Semanario Sabado.png'),
(32, 'Semanario Domingo', '$50.000', 'Semanario sublimado', 'Semanario Domingo.png'),
(33, 'Sudadera SantaFe', '$70.000', 'Sudadera sublimada', 'Sudadera SantaFe.png'),
(34, 'Sudadera Los Simpson', '$70.000', 'Sudadera sublimada', 'Sudadera Los Simpson.png'),
(35, 'Sudadera niños Spiderman', '$70.000', 'Sudadera sublimada', 'Sudadera niños Spiderman.png'),
(36, 'Sudadera Pato Lucas', '$70.000', 'Sudadera sublimada', 'Sudadera Pato Lucas.png'),
(37, 'Bolas navideñas', '$30.000', 'Accesorio personalizable', 'Bolas navideñas.jpeg'),
(38, 'Pocillos magicos personalizables', '$30.000', 'Accesorio personalizable', 'Pocillos magicos personalizables.png'),
(39, 'Pocillos personalizables', '$30.000', 'Accesorio personalizable', 'Pocillos personalizables.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ropaniños`
--

CREATE TABLE `ropaniños` (
  `CodProducto` int(11) NOT NULL,
  `Producto` varchar(50) DEFAULT NULL,
  `Precio` varchar(15) DEFAULT NULL,
  `Detalles` varchar(50) DEFAULT NULL,
  `Imagen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ropaniños`
--

INSERT INTO `ropaniños` (`CodProducto`, `Producto`, `Precio`, `Detalles`, `Imagen`) VALUES
(1, 'Conjunto niños Spider Bar', '$55.000', 'Pijama sublimada', 'Conjunto niños Spider Bar.jpg'),
(2, 'Semanario Lunes', '$50.000', 'Semanario sublimado', 'Semanario Lunes.png'),
(3, 'Semanario Martes', '$50.000', 'Semanario sublimado', 'Semanario Martes.png'),
(4, 'Semanario Miercoles', '$50.000', 'Semanario sublimado', 'Semanario Miercoles.png'),
(5, 'Semanario Jueves', '$50.000', 'Semanario sublimado', 'Semanario Jueves.png'),
(6, 'Semanario Viernes', '$50.000', 'Semanario sublimado', 'Semanario Viernes.png'),
(7, 'Semanario Sabado', '$50.000', 'Semanario sublimado', 'Semanario Sabado.png'),
(8, 'Semanario Domingo', '$50.000', 'Semanario sublimado', 'Semanario Domingo.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sudaderas`
--

CREATE TABLE `sudaderas` (
  `CodProducto` int(11) NOT NULL,
  `Producto` varchar(50) DEFAULT NULL,
  `Precio` varchar(15) DEFAULT NULL,
  `Detalles` varchar(50) DEFAULT NULL,
  `Imagen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sudaderas`
--

INSERT INTO `sudaderas` (`CodProducto`, `Producto`, `Precio`, `Detalles`, `Imagen`) VALUES
(1, 'Sudadera SantaFe', '$70.000', 'Sudadera sublimada', 'Sudadera SantaFe.png'),
(2, 'Sudadera Los Simpson', '$70.000', 'Sudadera sublimada', 'Sudadera Los Simpson.png'),
(3, 'Sudadera niños Spiderman', '$70.000', 'Sudadera sublimada', 'Sudadera niños Spiderman.png'),
(4, 'Sudadera Pato Lucas', '$70.000', 'Sudadera sublimada', 'Sudadera Pato Lucas.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `CodCliente` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contra` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`CodCliente`, `Nombre`, `Correo`, `Contra`) VALUES
(7, 'Nataly Guzman Pescador', 'nataly.pescador@gmail.com', '12345'),
(8, 'Nubia Sarmiento', 'nubiasarmiento73@hotmail.com', '54321'),
(9, 'Nubia Sarmiento', 'nubiasarmiento73@hotmail.com', '54321'),
(10, 'Nicolas Rios', 'nrioos3450@gmail.com', '98765'),
(11, 'Pepe Grillo', 'pepegrillo@gmail.com', '45678'),
(12, 'Brayan Arbelaez', 'brayan@gmail.com', '123450');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesorios`
--
ALTER TABLE `accesorios`
  ADD PRIMARY KEY (`CodProducto`);

--
-- Indices de la tabla `buzos`
--
ALTER TABLE `buzos`
  ADD PRIMARY KEY (`CodProducto`);

--
-- Indices de la tabla `camisetas`
--
ALTER TABLE `camisetas`
  ADD PRIMARY KEY (`CodProducto`);

--
-- Indices de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD KEY `numPedido` (`numPedido`),
  ADD KEY `CodProducto` (`CodProducto`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`numPedido`);

--
-- Indices de la tabla `pijamas`
--
ALTER TABLE `pijamas`
  ADD PRIMARY KEY (`CodProducto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`CodProducto`);

--
-- Indices de la tabla `ropaniños`
--
ALTER TABLE `ropaniños`
  ADD PRIMARY KEY (`CodProducto`);

--
-- Indices de la tabla `sudaderas`
--
ALTER TABLE `sudaderas`
  ADD PRIMARY KEY (`CodProducto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`CodCliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesorios`
--
ALTER TABLE `accesorios`
  MODIFY `CodProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `buzos`
--
ALTER TABLE `buzos`
  MODIFY `CodProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `camisetas`
--
ALTER TABLE `camisetas`
  MODIFY `CodProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `numPedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pijamas`
--
ALTER TABLE `pijamas`
  MODIFY `CodProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `CodProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `ropaniños`
--
ALTER TABLE `ropaniños`
  MODIFY `CodProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `sudaderas`
--
ALTER TABLE `sudaderas`
  MODIFY `CodProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `CodCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD CONSTRAINT `detallepedido_ibfk_1` FOREIGN KEY (`numPedido`) REFERENCES `pedido` (`numPedido`),
  ADD CONSTRAINT `detallepedido_ibfk_2` FOREIGN KEY (`CodProducto`) REFERENCES `productos` (`CodProducto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
