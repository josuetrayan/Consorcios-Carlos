-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-11-2020 a las 09:29:12
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
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alem147`
--

DROP TABLE IF EXISTS `alem147`;
CREATE TABLE IF NOT EXISTS `alem147` (
  `id_documento` int(50) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) UNSIGNED NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alem147`
--

INSERT INTO `alem147` (`id_documento`, `titulo`, `descripcion`, `tamanio`, `tipo`, `nombre_archivo`) VALUES
(1, 'alem147', 'alem', 199880, 'image/jpeg', 'ayuda_3.jpg'),
(2, 'HOAL', 'asd', 100152, 'application/pdf', 'php.pdf'),
(3, 'HOAL', 'asdasd', 199880, 'image/jpeg', 'ayuda_3.jpg'),
(4, 'HOAL', 'asdasd', 708146, 'image/jpeg', 'Confianza.jpg'),
(5, 'Prueba de cargad de datos alem147', 'vamos', 62728, 'image/jpeg', 'portada.jpg'),
(6, 'HOAL', 'asd', 708146, 'image/jpeg', 'Confianza.jpg'),
(7, 'HOAL', 'asdasd', 171758, 'application/pdf', 'EJEMPLO.pdf'),
(8, 'alem147 expensa', 'asdasd', 277018, 'application/pdf', '9- Expensas Septiembre 2016- Lavalle 84.pdf'),
(9, 'pruebadelist', 'aaaaaaaaaaa', 277018, 'application/pdf', '9- Expensas Septiembre 2016- Lavalle 84.pdf'),
(10, 'ENERO', '', 277018, 'application/pdf', '9- Expensas Septiembre 2016- Lavalle 84.pdf'),
(11, 'FEBRERO', '', 277018, 'application/pdf', '9- Expensas Septiembre 2016- Lavalle 84.pdf'),
(12, 'JUNIO', '', 277018, 'application/pdf', '9- Expensas Septiembre 2016- Lavalle 84.pdf'),
(13, 'MAYO', '', 784896, 'application/vnd.ms-excel', 'AcumuladosporMeses.xls');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `congreso180`
--

DROP TABLE IF EXISTS `congreso180`;
CREATE TABLE IF NOT EXISTS `congreso180` (
  `descripcion` mediumtext NOT NULL,
  `id_documento` int(50) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre_archivo` varchar(50) NOT NULL,
  `tamanio` int(50) UNSIGNED NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `congreso180`
--

INSERT INTO `congreso180` (`descripcion`, `id_documento`, `nombre_archivo`, `tamanio`, `tipo`, `titulo`) VALUES
('', 1, '9- Expensas Septiembre 2016- Lavalle 84.pdf', 277018, 'application/pdf', 'ENERO'),
('', 2, '9- Expensas Septiembre 2016- Lavalle 84.pdf', 277018, 'application/pdf', 'FEBRERO'),
('', 3, '9- Expensas Septiembre 2016- Lavalle 84.pdf', 277018, 'application/pdf', 'MARZO'),
('', 4, '9- Expensas Septiembre 2016- Lavalle 84.pdf', 277018, 'application/pdf', 'ABRIL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lavalle 147`
--

DROP TABLE IF EXISTS `lavalle 147`;
CREATE TABLE IF NOT EXISTS `lavalle 147` (
  `id_documento` int(50) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) UNSIGNED NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lavalle147`
--

DROP TABLE IF EXISTS `lavalle147`;
CREATE TABLE IF NOT EXISTS `lavalle147` (
  `id_documento` int(50) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) UNSIGNED NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lavalle147`
--

INSERT INTO `lavalle147` (`id_documento`, `titulo`, `descripcion`, `tamanio`, `tipo`, `nombre_archivo`) VALUES
(1, 'prueba 01 de  pdf', 'asd', 277018, 'application/pdf', '9- Expensas Septiembre 2016- Lavalle 84.pdf'),
(2, 'HOAL', 'ASas', 39071, 'image/jpeg', 'plantilla-chat-whatsapp_1142-955.jpg'),
(3, 'HOAL', 'aaaaaaaaaaaaaa', 78898, 'image/png', 'logo.png'),
(4, 'lavalle147 prueba de variable', 'ASas', 62728, 'image/jpeg', 'portada.jpg'),
(5, 'prueba de list lavalle147', 'aaaaaa', 277018, 'application/pdf', '9- Expensas Septiembre 2016- Lavalle 84.pdf'),
(6, 'ENERO', '', 277018, 'application/pdf', '9- Expensas Septiembre 2016- Lavalle 84.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_documentos`
--

DROP TABLE IF EXISTS `tbl_documentos`;
CREATE TABLE IF NOT EXISTS `tbl_documentos` (
  `id_documento` int(105) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` varchar(450) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(150) UNSIGNED NOT NULL,
  `tipo` varchar(150) NOT NULL,
  `nombre_archivo` varchar(150) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_documentos`
--

INSERT INTO `tbl_documentos` (`id_documento`, `titulo`, `descripcion`, `tamanio`, `tipo`, `nombre_archivo`) VALUES
(1, 'HOAL', 'asdas', 171758, 'application/pdf', 'EJEMPLO.pdf'),
(2, 'prueba 01 de  pdf', 'hora de probar pdfg', 100152, 'application/pdf', 'php.pdf'),
(3, 'expensa lavalle147', 'expensa', 277018, 'application/pdf', '9- Expensas Septiembre 2016- Lavalle 84.pdf'),
(4, 'prueba de expensa', 'asdas', 277018, 'application/pdf', '9- Expensas Septiembre 2016- Lavalle 84.pdf'),
(5, 'hola', 'asdasd', 277018, 'application/pdf', '9- Expensas Septiembre 2016- Lavalle 84.pdf'),
(6, 'lavalle147', 'prueba de ver si seleccione la tabla lavalle', 277018, 'application/pdf', '9- Expensas Septiembre 2016- Lavalle 84.pdf'),
(7, 'prueba de alem 147', 'prueba 0', 199880, 'image/jpeg', 'ayuda_3.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
