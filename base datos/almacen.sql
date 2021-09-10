-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-11-2020 a las 09:25:28
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `almacen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(20, 'blen'),
(19, 'cepilladora'),
(18, 'cera para piso'),
(21, 'crema para bronce'),
(15, 'Lavandinas'),
(17, 'perfumes'),
(16, 'trapos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incomes`
--

DROP TABLE IF EXISTS `incomes`;
CREATE TABLE IF NOT EXISTS `incomes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` decimal(25,2) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `media`
--

INSERT INTO `media` (`id`, `file_name`, `file_type`) VALUES
(27, 'blen.jpg', 'image/jpeg'),
(28, 'cepilloPiso.jpg', 'image/jpeg'),
(29, 'cera.jpg', 'image/jpeg'),
(30, 'cremabronce.jpg', 'image/jpeg'),
(31, 'lavandina.jpg', 'image/jpeg'),
(32, 'poet.jpg', 'image/jpeg'),
(33, 'trapos.jpg', 'image/jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `partNo` varchar(60) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `buy_price` decimal(25,2) DEFAULT 0.00,
  `sale_price` decimal(25,2) DEFAULT 0.00,
  `categorie_id` int(10) UNSIGNED NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `media_id` int(11) DEFAULT 0,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `partNo` (`partNo`),
  KEY `categorie_id` (`categorie_id`),
  KEY `media_id` (`media_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `partNo`, `quantity`, `buy_price`, `sale_price`, `categorie_id`, `location`, `media_id`, `date`) VALUES
(33, 'Ayudin', '1', 1, '100.00', '200.00', 15, 'sen mantenimineto', 31, '2020-11-04 21:36:04'),
(34, 'poet', '2', 50, '1.00', '1.00', 17, 'sen mantenimineto', 32, '2020-11-04 21:36:49'),
(35, 'trapo', '3', 74, '1.00', '1.00', 16, 'sen mantenimineto', 33, '2020-11-04 21:37:23'),
(36, 'crema para Bronce', '4', 30, '1.00', '1.00', 21, 'sen mantenimineto', 30, '2020-11-04 21:37:45'),
(37, 'cepillo para Piso', '5', 2, '1.00', '1.00', 16, 'sen mantenimineto', 28, '2020-11-04 21:38:20'),
(38, 'crema para Bronce', '6', 5, '0.00', '0.00', 21, 'sen mantenimineto', 30, '2020-11-04 21:58:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(11) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `buy_price` decimal(25,2) DEFAULT 0.00,
  `sale_price` decimal(25,2) DEFAULT 0.00,
  `total_sale` decimal(25,2) DEFAULT 0.00,
  `profit` decimal(25,2) DEFAULT 0.00,
  `destination` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL,
  `Personal` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sales`
--

INSERT INTO `sales` (`id`, `product_id`, `qty`, `buy_price`, `sale_price`, `total_sale`, `profit`, `destination`, `date`, `Personal`) VALUES
(64, 37, 1, '1.00', '1.00', '1.00', '0.00', 'congreso 180', '2020-11-04 00:00:00', 'JOSUE'),
(65, 35, 6, '1.00', '1.00', '6.00', '0.00', 'mendoza580', '2020-11-04 00:00:00', 'Lucas'),
(66, 33, 50, '100.00', '200.00', '10000.00', '5000.00', 'congreso 180', '2020-11-05 00:00:00', 'BRUNO'),
(67, 33, 4, '0.00', '0.00', '0.00', '0.00', 'congreso 180', '2020-11-05 00:00:00', 'JOSUE'),
(68, 33, 10, '0.00', '0.00', '0.00', '0.00', 'alem 145', '2020-11-05 00:00:00', 'BRUNO'),
(69, 34, 50, '0.00', '0.00', '0.00', '0.00', 'mendoza580', '2020-11-05 00:00:00', 'Lucas'),
(70, 35, 10, '0.00', '0.00', '0.00', '0.00', 'Pasaje 2 de abril', '2020-11-05 00:00:00', 'CARLITOS'),
(71, 35, 10, '0.00', '0.00', '0.00', '0.00', 'Pasaje 2 de abril', '2020-11-05 00:00:00', 'CARLITOS'),
(72, 33, 30, '0.00', '0.00', '0.00', '0.00', 'Pasaje 2 de abril', '2020-11-05 00:00:00', 'CARLITOS'),
(73, 33, 17, '0.00', '0.00', '0.00', '0.00', 'Pasaje 2 de abril', '2020-11-05 00:00:00', 'pedro'),
(74, 33, 2, '0.00', '0.00', '0.00', '0.00', 'congreso 180', '2020-11-05 00:00:00', 'CARLITOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` int(11) NOT NULL,
  `image` varchar(255) DEFAULT 'no_image.jpg',
  `status` int(1) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `user_level` (`user_level`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `user_level`, `image`, `status`, `last_login`) VALUES
(1, 'Admin User', 'Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'df315yag1.jpeg', 1, '2020-11-04 21:54:03'),
(3, 'Default User', 'Nataly', '8cb2237d0679ca88db6464eac60da96345513964', 2, 'no_image.jpg', 1, '2020-11-04 21:52:27'),
(14, 'Marcelo', 'Marcelo', '8cb2237d0679ca88db6464eac60da96345513964', 5, 'no_image.jpg', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_groups`
--

DROP TABLE IF EXISTS `user_groups`;
CREATE TABLE IF NOT EXISTS `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(150) NOT NULL,
  `group_level` int(11) NOT NULL,
  `group_status` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `group_level` (`group_level`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_groups`
--

INSERT INTO `user_groups` (`id`, `group_name`, `group_level`, `group_status`) VALUES
(1, 'Carlos Trayan', 1, 1),
(2, 'Nataly', 2, 1),
(7, 'Compra de insumos', 5, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_products` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `SK` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_user` FOREIGN KEY (`user_level`) REFERENCES `user_groups` (`group_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
