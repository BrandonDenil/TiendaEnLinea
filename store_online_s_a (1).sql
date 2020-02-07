-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2019 a las 20:43:15
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `store_online_s_a`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`) VALUES
(1, 'computadoras'),
(2, 'monitores'),
(3, 'telefonos'),
(4, 'cargadores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo_electronico` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `no_tarjeta` int(11) DEFAULT NULL,
  `cvv` int(11) DEFAULT NULL,
  `direccion` varchar(75) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contrasenia` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido`, `correo_electronico`, `no_tarjeta`, `cvv`, `direccion`, `usuario`, `contrasenia`) VALUES
(1, 'brandon', 'de leon', 'adf@gmail.com', 4234, 123, 'salca', 'brandon', '123'),
(2, 'susan', 'pingle', 'suanpingle@gmail.cm', 0, 123, '123', 'susan', 'susan'),
(3, 'adfs', 'dshfak;s', 'lkfjafd@gmail.com', 0, 1121, '121', 'adf', 'ddf4'),
(4, 'mario', 'lopez', 'fdadfa@gmail.com', 0, 12344, '567', 'ml98', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `id_detalle` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `subtotal` decimal(10,0) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_existencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`id_detalle`, `cantidad`, `subtotal`, `id_venta`, `id_existencia`) VALUES
(121, 1, '0', 93, 1),
(122, 1, '0', 94, 1),
(123, 1, '0', 94, 12),
(124, 1, '0', 95, 1),
(125, 1, '0', 95, 12),
(126, 1, '0', 96, 1),
(127, 1, '0', 96, 12),
(128, 1, '0', 97, 1),
(129, 1, '0', 97, 12),
(130, 1, '3000', 98, 1),
(131, 1, '1000', 98, 12),
(132, 1, '3000', 99, 1),
(133, 1, '1000', 99, 12),
(134, 1, '3000', 100, 1),
(135, 1, '1000', 100, 12),
(136, 2, '3000', 101, 1),
(137, 2, '1000', 101, 12),
(138, 2, '3000', 102, 1),
(139, 2, '1000', 102, 12),
(140, 2, '3000', 103, 1),
(141, 2, '1000', 103, 12),
(142, 2, '3000', 104, 1),
(143, 2, '1000', 104, 12),
(144, 2, '3000', 105, 1),
(145, 2, '1000', 105, 12),
(146, 2, '3000', 106, 1),
(147, 2, '1000', 106, 12),
(148, 2, '3000', 107, 1),
(149, 2, '1000', 107, 12),
(150, 1, '23423', 108, 11),
(151, 1, '3000', 108, 1),
(152, 1, '23423', 109, 11),
(153, 1, '3000', 109, 1),
(154, 1, '23423', 110, 11),
(155, 1, '3000', 110, 1),
(156, 1, '23423', 111, 11),
(157, 1, '3000', 111, 1),
(158, 1, '23423', 112, 11),
(159, 1, '3000', 112, 1),
(160, 1, '3000', 113, 1),
(161, 1, '1000', 113, 16),
(162, 2, '3000', 114, 1),
(163, 2, '3000', 115, 1),
(164, 5, '3000', 116, 1),
(165, 5, '3000', 117, 1),
(166, 5, '3000', 118, 1),
(167, 10000, '200', 119, 17),
(168, 10000, '200', 120, 17),
(169, 1, '200', 121, 17),
(170, 1, '200', 122, 17),
(171, 1, '200', 123, 17),
(172, 1, '200', 124, 17),
(173, 1, '200', 125, 17),
(174, 1, '200', 126, 17),
(175, 1, '200', 127, 17),
(176, 1, '200', 128, 17),
(177, 1, '200', 129, 17),
(178, 1, '200', 130, 17),
(179, 1, '3000', 130, 1),
(180, 1, '200', 131, 17),
(181, 1, '3000', 131, 1),
(182, 1, '200', 132, 17),
(183, 1, '3000', 132, 1),
(184, 1, '200', 133, 17),
(185, 1, '3000', 133, 1),
(186, 1, '200', 134, 17),
(187, 1, '3000', 134, 1),
(188, 1, '200', 135, 17),
(189, 1, '3000', 135, 1),
(190, 1, '200', 136, 17),
(191, 1, '3000', 136, 1),
(192, 1, '200', 137, 17),
(193, 1, '3000', 137, 1),
(194, 1, '200', 138, 17),
(195, 1, '3000', 138, 1),
(196, 10, '200', 139, 17),
(197, 1, '3000', 139, 1),
(198, 1, '1000', 139, 12),
(199, 1, '500', 140, 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `existencia_de_productos`
--

CREATE TABLE `existencia_de_productos` (
  `id_existencia` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_sucursal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `existencia_de_productos`
--

INSERT INTO `existencia_de_productos` (`id_existencia`, `cantidad`, `id_producto`, `id_sucursal`) VALUES
(1, 220, 2, 1),
(11, 3, 7, 1),
(12, 513, 6, 1),
(16, 200, 8, 1),
(17, 979972, 9, 1),
(18, 49, 10, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `codigo` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `foto` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `precio`, `descripcion`, `codigo`, `foto`, `id_categoria`) VALUES
(2, 'tablet apple', 3000, 'tableta marca apple', 'adfad', 'data:image/jpeg;base64,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', 3),
(6, 'lg Monitor', 1000, 'monitor apto para pc 11 pulgadas', '2312', 'https://www.lg.com/au/images/tvs/md05804329/gallery/32LJ550D_d1_210917.jpg', 2),
(7, 'apple', 23423, 'adsfafd', 'das', 'data:image/jpeg;base64,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', 3),
(8, 'televisor phillips', 1000, 'televisor', 'djjtd', 'data:image/jpeg;base64,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', 2),
(9, 'mouse logitech', 200, 'mouse  inalambrico para lol', '3fg', 'https://www.officedepot.com.mx/medias/48845.jpg-1200ftw?context=bWFzdGVyfHJvb3R8MTg3NDc4fGltYWdlL2pwZWd8aGRhL2hiNC85NjUzMzI5MTMzNTk4LmpwZ3wwMGJiY2VjNzJmODk3NzA0MGM5MzI2MTUzZjY3YTYzYmZmZDRkZjQyMWU2ODc0NmEzNDNlOWVjM2I2M2FjYjI2', 1),
(10, 'ups', 500, 'ups', 'sadskjh', 'data:image/jpeg;base64,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', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre`) VALUES
(1, 'administrador'),
(2, 'gerente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `id_sucursal` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ubicacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`id_sucursal`, `nombre`, `ubicacion`, `foto`) VALUES
(1, 'pradera_xela', 'xela', 'saf'),
(2, 'la torre', 'zona 5 xela', 'fadfadf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `contrasenia` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `contrasenia`, `id_rol`) VALUES
(1, 'brandon', '14998', 1),
(3, 'denil', '14998', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `total` float NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `fecha`, `total`, `id_cliente`) VALUES
(93, '2019-11-14', 0, 1),
(94, '2019-11-14', 0, 1),
(95, '2019-11-14', 0, 1),
(96, '2019-11-14', 0, 1),
(97, '2019-11-14', 0, 1),
(98, '2019-11-14', 4000, 1),
(99, '2019-11-14', 4000, 1),
(100, '2019-11-14', 4000, 1),
(101, '2019-11-14', 8000, 1),
(102, '2019-11-14', 8000, 1),
(103, '2019-11-14', 8000, 1),
(104, '2019-11-14', 8000, 1),
(105, '2019-11-14', 8000, 1),
(106, '2019-11-14', 8000, 1),
(107, '2019-11-14', 8000, 1),
(108, '2019-11-14', 26423, 1),
(109, '2019-11-14', 26423, 1),
(110, '2019-11-14', 26423, 1),
(111, '2019-11-14', 26423, 1),
(112, '2019-11-14', 26423, 1),
(113, '2019-11-16', 4000, 1),
(114, '2019-11-16', 6000, 1),
(115, '2019-11-16', 6000, 1),
(116, '2019-11-16', 15000, 1),
(117, '2019-11-16', 15000, 1),
(118, '2019-11-16', 15000, 1),
(119, '2019-11-16', 2000000, 1),
(120, '2019-11-16', 2000000, 1),
(121, '2019-11-16', 200, 1),
(122, '2019-11-16', 200, 1),
(123, '2019-11-16', 200, 1),
(124, '2019-11-16', 200, 1),
(125, '2019-11-16', 200, 1),
(126, '2019-11-16', 200, 1),
(127, '2019-11-16', 200, 1),
(128, '2019-11-16', 200, 1),
(129, '2019-11-16', 200, 1),
(130, '2019-11-16', 3200, 1),
(131, '2019-11-16', 3200, 1),
(132, '2019-11-16', 3200, 1),
(133, '2019-11-16', 3200, 1),
(134, '2019-11-16', 3200, 1),
(135, '2019-11-16', 3200, 1),
(136, '2019-11-16', 3200, 1),
(137, '2019-11-16', 3200, 1),
(138, '2019-11-16', 3200, 1),
(139, '2019-11-16', 6000, 1),
(140, '2019-11-17', 500, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `detalle_ibfk_1` (`id_venta`),
  ADD KEY `id_existencia` (`id_existencia`);

--
-- Indices de la tabla `existencia_de_productos`
--
ALTER TABLE `existencia_de_productos`
  ADD PRIMARY KEY (`id_existencia`),
  ADD KEY `id_producto` (`id_producto`,`id_sucursal`),
  ADD KEY `existencia_de_productos_ibfk_1` (`id_sucursal`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`id_sucursal`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT de la tabla `existencia_de_productos`
--
ALTER TABLE `existencia_de_productos`
  MODIFY `id_existencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id_sucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `detalle_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id_venta`),
  ADD CONSTRAINT `detalle_ibfk_2` FOREIGN KEY (`id_existencia`) REFERENCES `existencia_de_productos` (`id_existencia`);

--
-- Filtros para la tabla `existencia_de_productos`
--
ALTER TABLE `existencia_de_productos`
  ADD CONSTRAINT `existencia_de_productos_ibfk_1` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursal` (`id_sucursal`),
  ADD CONSTRAINT `existencia_de_productos_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
