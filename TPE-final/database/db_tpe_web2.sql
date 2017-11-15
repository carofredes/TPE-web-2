-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2017 a las 07:19:59
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_tpe_web2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `texto` text NOT NULL,
  `calificacion` int(5) NOT NULL,
  `id_img` int(10) NOT NULL,
  `fecha` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `id_user`, `texto`, `calificacion`, `id_img`, `fecha`) VALUES
(61, 1, 'asdasd', 1, 1, 1510724594),
(62, 1, 'asdasdadasd', 1, 1, 1510724599),
(63, 1, 'adasdad', 1, 1, 1510725119),
(64, 1, 'adasdad', 1, 1, 1510725200),
(65, 1, 'adasd', 1, 1, 1510725230),
(66, 1, 'asdad', 1, 1, 1510725254),
(67, 1, 'asdad', 1, 1, 1510725299),
(68, 1, 'asdsad', 1, 1, 1510725331),
(69, 1, 'adas', 1, 1, 1510725354),
(70, 1, 'asda', 1, 1, 1510725401),
(71, 1, 'asdasdad', 1, 1, 1510725421),
(72, 1, 'gjhghj', 1, 1, 1510725455),
(73, 1, 'aetwherhetdjrtk', 1, 1, 1510725486);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_img` (`id_img`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
