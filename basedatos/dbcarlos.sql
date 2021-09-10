-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-12-2020 a las 01:31:57
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
-- Base de datos: `dbcarlos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2deabril380`
--

DROP TABLE IF EXISTS `2deabril380`;
CREATE TABLE IF NOT EXISTS `2deabril380` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2deabril390`
--

DROP TABLE IF EXISTS `2deabril390`;
CREATE TABLE IF NOT EXISTS `2deabril390` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `24septiembre304`
--

DROP TABLE IF EXISTS `24septiembre304`;
CREATE TABLE IF NOT EXISTS `24septiembre304` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `25mayo30`
--

DROP TABLE IF EXISTS `25mayo30`;
CREATE TABLE IF NOT EXISTS `25mayo30` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `25mayo312`
--

DROP TABLE IF EXISTS `25mayo312`;
CREATE TABLE IF NOT EXISTS `25mayo312` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alem146-150`
--

DROP TABLE IF EXISTS `alem146-150`;
CREATE TABLE IF NOT EXISTS `alem146-150` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `balcarce179`
--

DROP TABLE IF EXISTS `balcarce179`;
CREATE TABLE IF NOT EXISTS `balcarce179` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `balcarce670`
--

DROP TABLE IF EXISTS `balcarce670`;
CREATE TABLE IF NOT EXISTS `balcarce670` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `belgrano3406`
--

DROP TABLE IF EXISTS `belgrano3406`;
CREATE TABLE IF NOT EXISTS `belgrano3406` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catamarca655`
--

DROP TABLE IF EXISTS `catamarca655`;
CREATE TABLE IF NOT EXISTS `catamarca655` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `congresales`
--

DROP TABLE IF EXISTS `congresales`;
CREATE TABLE IF NOT EXISTS `congresales` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `congreso850`
--

DROP TABLE IF EXISTS `congreso850`;
CREATE TABLE IF NOT EXISTS `congreso850` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corrientes961`
--

DROP TABLE IF EXISTS `corrientes961`;
CREATE TABLE IF NOT EXISTS `corrientes961` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crisostomo352`
--

DROP TABLE IF EXISTS `crisostomo352`;
CREATE TABLE IF NOT EXISTS `crisostomo352` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercitoymendoza`
--

DROP TABLE IF EXISTS `ejercitoymendoza`;
CREATE TABLE IF NOT EXISTS `ejercitoymendoza` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrerios63`
--

DROP TABLE IF EXISTS `entrerios63`;
CREATE TABLE IF NOT EXISTS `entrerios63` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrerios167`
--

DROP TABLE IF EXISTS `entrerios167`;
CREATE TABLE IF NOT EXISTS `entrerios167` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gobernadorcampo`
--

DROP TABLE IF EXISTS `gobernadorcampo`;
CREATE TABLE IF NOT EXISTS `gobernadorcampo` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gonzalo`
--

DROP TABLE IF EXISTS `gonzalo`;
CREATE TABLE IF NOT EXISTS `gonzalo` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jade`
--

DROP TABLE IF EXISTS `jade`;
CREATE TABLE IF NOT EXISTS `jade` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lamadrid910`
--

DROP TABLE IF EXISTS `lamadrid910`;
CREATE TABLE IF NOT EXISTS `lamadrid910` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laprida1255`
--

DROP TABLE IF EXISTS `laprida1255`;
CREATE TABLE IF NOT EXISTS `laprida1255` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laspiedras297`
--

DROP TABLE IF EXISTS `laspiedras297`;
CREATE TABLE IF NOT EXISTS `laspiedras297` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lavalle84`
--

DROP TABLE IF EXISTS `lavalle84`;
CREATE TABLE IF NOT EXISTS `lavalle84` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mendoza480`
--

DROP TABLE IF EXISTS `mendoza480`;
CREATE TABLE IF NOT EXISTS `mendoza480` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mendoza1053`
--

DROP TABLE IF EXISTS `mendoza1053`;
CREATE TABLE IF NOT EXISTS `mendoza1053` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monteagudo511`
--

DROP TABLE IF EXISTS `monteagudo511`;
CREATE TABLE IF NOT EXISTS `monteagudo511` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monteagudo731`
--

DROP TABLE IF EXISTS `monteagudo731`;
CREATE TABLE IF NOT EXISTS `monteagudo731` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muñeca458`
--

DROP TABLE IF EXISTS `muñeca458`;
CREATE TABLE IF NOT EXISTS `muñeca458` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pjesantillan936`
--

DROP TABLE IF EXISTS `pjesantillan936`;
CREATE TABLE IF NOT EXISTS `pjesantillan936` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sanjuan649`
--

DROP TABLE IF EXISTS `sanjuan649`;
CREATE TABLE IF NOT EXISTS `sanjuan649` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sanlorenzoyheras`
--

DROP TABLE IF EXISTS `sanlorenzoyheras`;
CREATE TABLE IF NOT EXISTS `sanlorenzoyheras` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `santiago48`
--

DROP TABLE IF EXISTS `santiago48`;
CREATE TABLE IF NOT EXISTS `santiago48` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `santiago671`
--

DROP TABLE IF EXISTS `santiago671`;
CREATE TABLE IF NOT EXISTS `santiago671` (
  `id_documento` int(50) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `tamanio` int(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre_archivo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `clave`) VALUES
('24SEPTIEMBRE304', '24SEPTIEMBRE304'),
('25MAYO30', '25MAYO30'),
('ALEM146-150', 'ALEM146-150'),
('BALCARCE179', 'BALCARCE179'),
('BELGRANO3406', 'BELGRANO3406'),
('CONGRESALES', 'CONGRESALES'),
('CONGRESO850', 'CONGRESO850'),
('CORRIENTES961', 'CORRIENTES961'),
('EJERCITOYMENDOZA', 'EJERCITOYMENDOZA'),
('ENTREREIOS63', 'ENTREREIOS63'),
('GONZALO', 'GONZALO'),
('JADE', 'JADE'),
('LAPRIDA1255', 'LAPRIDA1255'),
('LAVALLE84', 'LAVALLE84'),
('MENDOZA480', 'MENDOZA480'),
('MONTEAGUDO511', 'MONTEAGUDO511'),
('MUÑECAS458', 'MUÑECAS458'),
('SANTIAGO671', 'SANTIAGO671'),
('SANLORENZOYHERAS', 'SANLORENZOYHERAS'),
('2DEABRIL380', '2DEABRIL380'),
('MONTEAGUDO731', 'MONTEAGUDO731'),
('PJESANTILLAN936', 'PJESANTILLAN936'),
('CATAMARCA655', 'CATAMARCA655'),
('BALCARCE670', 'BALCARCE670'),
('2DEABRIL390', '2DEABRIL390'),
('SANTIAGO48', 'SANTIAGO48'),
('LASPIEDRAS297', 'LASPIEDRAS297'),
('SANJUAN649', 'SANJUAN649'),
('ENTRERIOS167', 'ENTRERIOS167'),
('LAMADRID910', 'LAMADRID910'),
('GOBERNADORCAMPO', 'GOBERNADORCAMPO'),
('25MAYO312', '25MAYO312'),
('CRISOSTOMO352', 'CRISOSTOMO352'),
('MENDOZA1053', 'MENDOZA1053'),
('carlostrayan', 'carli473');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
