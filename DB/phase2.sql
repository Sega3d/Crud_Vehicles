-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 26-03-2023 a las 01:41:40
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phase2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controlador`
--

DROP TABLE IF EXISTS `controlador`;
CREATE TABLE IF NOT EXISTS `controlador` (
  `id` int NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `controlador`
--

INSERT INTO `controlador` (`id`, `usuario`, `password`) VALUES
(1, 'sega', 12345);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

DROP TABLE IF EXISTS `informacion`;
CREATE TABLE IF NOT EXISTS `informacion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipoV` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `modelo` int NOT NULL,
  `matricula` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `color` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `cantidad` int NOT NULL,
  `imagen` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`id`, `tipoV`, `modelo`, `matricula`, `color`, `cantidad`, `imagen`) VALUES
(1, 'Motocicleta', 2012, 'ADS23A', 'ROJO', 2, '1136792763.jpg'),
(2, 'Cuatrimoto', 2020, 'RRK22C', 'ROJO', 2, '1329374814.png'),
(3, 'Automóvil', 2021, 'NDB211', 'AZUL', 5, '542028947.jpg'),
(4, 'Campero', 2014, 'GRD451', 'VERDE', 4, '2009279086.jpg'),
(5, 'Camioneta', 2023, 'SSA520', 'GRIS', 5, '279976894.jpeg'),
(6, 'Bus', 2015, 'RRT664', 'AZUL', 30, '368162497.jpg'),
(7, 'Volqueta ', 2008, 'FFR854', 'ROJO', 2, '1738454906.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
