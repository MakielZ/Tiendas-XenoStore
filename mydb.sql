-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-02-2021 a las 04:32:17
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategorias` int(11) NOT NULL,
  `nombreCategoria` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategorias`, `nombreCategoria`) VALUES
(1, 'Gaming'),
(2, 'Electronicos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itempedido`
--

CREATE TABLE `itempedido` (
  `idItemPedido` int(11) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `codProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `itempedido`
--

INSERT INTO `itempedido` (`idItemPedido`, `stock`, `codProducto`) VALUES
(77, 20, 81),
(78, NULL, 82),
(79, NULL, 83),
(80, 4, 84),
(81, 5, 85);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `idProductoCarrito` int(11) NOT NULL,
  `idItem` int(11) NOT NULL,
  `unidadesCompradas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`idProductoCarrito`, `idItem`, `unidadesCompradas`) VALUES
(1, 81, NULL),
(2, 78, NULL),
(3, 79, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codProducto` int(11) NOT NULL,
  `nombreProducto` varchar(45) NOT NULL,
  `descripcionProducto` varchar(300) NOT NULL,
  `anoFabricacion` int(11) NOT NULL,
  `precio` float NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fabricante` varchar(45) NOT NULL,
  `idSubCategorias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codProducto`, `nombreProducto`, `descripcionProducto`, `anoFabricacion`, `precio`, `foto`, `fabricante`, `idSubCategorias`) VALUES
(81, 'NINTENDO DS', 'Consola de nintendo de quinta generación', 2004, 30, 'Nintendo-DS-Lite-Black-Open.png', 'NINTENDO', 1),
(82, 'TECLADO RAZER', 'Es un teclado caro', 2017, 30, 'keyboardMK1.jpg', 'MICROSOFT', 1),
(83, 'ONE PIECE STAMPEDE', 'Juego qlero de One Piece', 2020, 5, 'op4.jpg', 'BANDAI', 3),
(84, 'FINAL FANTASY XV', 'Juego bueno', 2016, 70, 'ffxv.jpg', 'SQUARE ENIX', 3),
(85, 'Nintendo SWITCH', 'Producto estrella de nintendo los ultimos años', 2016, 300, '960x0.jpg', 'NINTENDO', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRoles` int(11) NOT NULL,
  `jerarquiaRol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRoles`, `jerarquiaRol`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `idSubCategorias` int(11) NOT NULL,
  `nombreSubCategoria` varchar(45) NOT NULL,
  `idCategorias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`idSubCategorias`, `nombreSubCategoria`, `idCategorias`) VALUES
(1, 'Computadoras', 2),
(2, 'Headsets', 2),
(3, 'Juegos', 1),
(4, 'Consolas', 1),
(5, 'Smartphones', 2),
(6, 'Cámaras', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(45) NOT NULL,
  `correoUsuario` varchar(60) NOT NULL,
  `contaseñaUsuario` varchar(45) NOT NULL,
  `saldo` float NOT NULL,
  `idRoles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombreUsuario`, `correoUsuario`, `contaseñaUsuario`, `saldo`, `idRoles`) VALUES
(1, 'admin', 'adminxeno@gmail.com', 'onlyaccess', 0, 1),
(2, 'makiel', 'marcoselcrack45@gmail.com', '123456', 0, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategorias`);

--
-- Indices de la tabla `itempedido`
--
ALTER TABLE `itempedido`
  ADD PRIMARY KEY (`idItemPedido`),
  ADD UNIQUE KEY `codProducto_2` (`codProducto`),
  ADD UNIQUE KEY `idItemPedido` (`idItemPedido`),
  ADD KEY `codProducto` (`codProducto`),
  ADD KEY `idItemPedido_2` (`idItemPedido`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idProductoCarrito`),
  ADD KEY `idItem` (`idItem`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codProducto`),
  ADD KEY `fk_Producto_SubCategorias1_idx` (`idSubCategorias`),
  ADD KEY `codProducto` (`codProducto`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRoles`);

--
-- Indices de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`idSubCategorias`),
  ADD KEY `fk_SubCategorias_Categorias1_idx` (`idCategorias`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `itempedido`
--
ALTER TABLE `itempedido`
  MODIFY `idItemPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idProductoCarrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `codProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `itempedido`
--
ALTER TABLE `itempedido`
  ADD CONSTRAINT `itempedido_ibfk_1` FOREIGN KEY (`codProducto`) REFERENCES `producto` (`codProducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`idItem`) REFERENCES `itempedido` (`idItemPedido`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_Producto_SubCategorias1` FOREIGN KEY (`idSubCategorias`) REFERENCES `subcategorias` (`idSubCategorias`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD CONSTRAINT `fk_SubCategorias_Categorias1` FOREIGN KEY (`idCategorias`) REFERENCES `categorias` (`idCategorias`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_Roles1` FOREIGN KEY (`idRoles`) REFERENCES `roles` (`idRoles`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
