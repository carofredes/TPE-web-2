-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2017 a las 05:42:18
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
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'Nature'),
(2, 'Space'),
(3, 'Cute'),
(4, 'Other');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `texto` text NOT NULL,
  `calificacion` int(5) NOT NULL,
  `id_img` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `id_user`, `texto`, `calificacion`, `id_img`) VALUES
(1, 7, 'creado desde la db', 5, 1),
(3, 7, 'holis', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_img` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_img`, `titulo`, `id_categoria`) VALUES
(1, 'nature-1', 1),
(2, 'space-1', 2),
(3, 'space-2', 2),
(4, 'cute-1', 3),
(5, 'other-1', 4),
(6, 'nature-2', 1),
(7, 'cute-2', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_relacionadas`
--

CREATE TABLE `imagenes_relacionadas` (
  `id_img` int(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `id_img_relac` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes_relacionadas`
--

INSERT INTO `imagenes_relacionadas` (`id_img`, `url`, `id_img_relac`) VALUES
(4, 'media/img/cute-1-baw.jpg', 1),
(4, 'media/img/cute-1-sepia.jpg', 2),
(7, 'media/img/cute-2-baw.jpg', 3),
(7, 'media/img/cute-2-sepia.jpg', 4),
(1, 'media/img/nature-1-baw.jpg', 5),
(1, 'media/img/nature-1-sepia.jpg', 6),
(6, 'media/img/nature-2-sepia.jpg', 7),
(6, 'media/img/nature-2-baw.jpg', 8),
(5, 'media/img/other-1-baw.jpg', 9),
(5, 'media/img/other-1-sepia.jpg', 10),
(2, 'media/img/space-1-sepia.jpg', 11),
(2, 'media/img/space-1-baw.jpg', 12),
(3, 'media/img/space-2-sepia.jpg', 13),
(3, 'media/img/space-2-baw.jpg', 14),
(1, 'media/img/sdf0.jpg', 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nickName` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permissions` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `nickName`, `password`, `permissions`) VALUES
(1, 'admin', '$2y$10$eIg384TcHJ2BTDZg4y37V.EGVIjQFLpilhniTftVFmKj/s4CAzNam', 1),
(8, 'buhonoadmin', '$2y$10$oVsqFyIb3DkZYmxpp0Ze3OlZvj0mhdiJ2PmI6N3TrV6onC9jvO/2q', 0),
(11, 'usuario1', '$2y$10$sqxx6irdepaZJNh1PGHD7O7W3e93Buj.a63rgpdYNdfAgfdL5Yl.u', 0),
(12, 'usuario2', '$2y$10$XAl3qz7zFW82hF1gr4/dWOy0MOslR4OXT0WH.4LckhoiErmSM.ILS', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_img` (`id_img`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `imagenes_relacionadas`
--
ALTER TABLE `imagenes_relacionadas`
  ADD PRIMARY KEY (`id_img_relac`),
  ADD KEY `id_img` (`id_img`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `imagenes_relacionadas`
--
ALTER TABLE `imagenes_relacionadas`
  MODIFY `id_img_relac` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

--
-- Filtros para la tabla `imagenes_relacionadas`
--
ALTER TABLE `imagenes_relacionadas`
  ADD CONSTRAINT `imagenes_relacionadas_ibfk_1` FOREIGN KEY (`id_img`) REFERENCES `imagen` (`id_img`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
