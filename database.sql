-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-07-2018 a las 18:50:11
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cloudbits_test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacenes`
--

CREATE TABLE `almacenes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `color` varchar(100) NOT NULL DEFAULT 'dash-tile-dark',
  `ver` tinyint(3) UNSIGNED DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `almacenes`
--

INSERT INTO `almacenes` (`id`, `nombre`, `color`, `ver`, `created_at`, `updated_at`) VALUES
(1, 'mas Refacciones', 'dash-tile-leaf', 1, '2018-07-19 03:15:35', '2018-07-19 04:51:11'),
(2, 'mas Luz', 'dash-tile-ocean', 1, '2018-07-19 04:07:26', '2018-07-19 04:51:37'),
(3, 'mas Pagos', 'dash-tile-flower', 1, '2018-07-19 04:08:26', '2018-07-19 04:51:50'),
(4, 'mas Tunning', 'dash-tile-fruit', 1, '2018-07-19 04:08:45', '2018-07-19 04:51:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacenes_products`
--

CREATE TABLE `almacenes_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `almacenentrada_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'salida',
  `almacensalida_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'entrada',
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `notas` text,
  `ver` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `almacenes_products`
--

INSERT INTO `almacenes_products` (`id`, `almacenentrada_id`, `almacensalida_id`, `product_id`, `notas`, `ver`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, '<p>ejemplo</p>\r\n', 1, '2018-07-19 06:28:58', '2018-07-19 16:25:54'),
(2, 1, 1, 3, '<p>ejemplo1</p>\r\n', 1, '2018-07-19 06:20:53', '2018-07-19 16:26:59'),
(3, 1, 1, 4, '<p><strong>Ejemplo</strong></p>\r\n', 1, '2018-07-19 06:37:16', '2018-07-19 16:27:17'),
(4, 1, 1, 5, '<ul>\r\n	<li>\r\n	<div style=\"background:#eee; border:1px solid #ccc; padding:5px 10px\">otro ejemplo</div>\r\n	</li>\r\n</ul>\r\n', 1, '2018-07-19 07:56:52', '2018-07-19 16:28:20'),
(5, 4, 0, 6, '<p>x</p>\r\n', 1, '2018-07-19 07:58:01', '2018-07-19 16:28:59'),
(6, 1, 1, 2, '<p><s>mas ejemplos</s></p>\r\n', 1, '2018-07-19 16:01:50', '2018-07-19 16:26:46'),
(7, 4, NULL, 4, '<p>x</p>\r\n', 1, '2018-07-19 16:38:50', '2018-07-19 16:40:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `precio` decimal(15,2) DEFAULT NULL,
  `stock` tinyint(4) UNSIGNED DEFAULT NULL,
  `descripcion` text,
  `notas` text,
  `ver` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `codigo`, `nombre`, `precio`, `stock`, `descripcion`, `notas`, `ver`, `created_at`, `updated_at`) VALUES
(1, '220003', 'AZUCAR 2 Kg', '10.10', 5, NULL, '<p><strong>Ejercicio</strong></p>\r\n', 1, '2018-07-17 17:59:36', '2018-07-19 16:29:48'),
(2, '220008', 'BOTELLA DE AGUA SAN MARTIN 600ML.', '21.10', 27, NULL, '<p>prueba</p>\r\n', 1, '2018-07-17 18:00:01', '2018-07-19 16:43:26'),
(3, '220004', 'CAFE SOLUBLE 300 gr.', '300.00', 0, NULL, '<h3>Mas pruebas</h3>\r\n', 1, '2018-07-17 18:00:28', '2018-07-19 16:43:52'),
(4, '220005', 'COCA COLA PLÁSTICO 600 ml', '31.10', 7, NULL, '<p>update</p>\r\n', 1, '2018-07-17 18:01:11', '2018-07-19 16:41:32'),
(5, '220002', 'CUCHARA DE PLASTICO C/25PZS.', '15.00', 5, NULL, '<p>xxxx</p>\r\n', 1, '2018-07-17 18:01:40', '2018-07-19 07:58:58'),
(6, '220006', 'Mesa', '2231.00', 7, NULL, '<p>mejorado</p>\r\n', 1, '2018-07-18 18:50:05', '2018-07-19 16:41:57');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacenes`
--
ALTER TABLE `almacenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `almacenes_products`
--
ALTER TABLE `almacenes_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `almacene_id` (`almacenentrada_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `almacenes`
--
ALTER TABLE `almacenes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `almacenes_products`
--
ALTER TABLE `almacenes_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `almacenes_products`
--
ALTER TABLE `almacenes_products`
  ADD CONSTRAINT `almacenes_products_ibfk_1` FOREIGN KEY (`almacenentrada_id`) REFERENCES `almacenes` (`id`),
  ADD CONSTRAINT `almacenes_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
