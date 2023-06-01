-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2023 a las 17:18:35
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `spacey`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE IF NOT EXISTS `preguntas` (
`Id_e` int(6) NOT NULL,
  `pregunta1` varchar(266) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`Id_e`, `pregunta1`, `pregunta2`, `pregunta3`, `pregunta4`, `pregunta5`) VALUES
(1, 'What do you think of the website?', 'What would you suggest we add?', 'Was the information useful for you?', 'Would you recommend this site?', 'How frequently would you use this site?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE IF NOT EXISTS `respuestas` (
`id` int(6) NOT NULL,
  `pregunta1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` int(6) NOT NULL,
  `preguntas` int(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`id`, `pregunta1`, `pregunta2`, `pregunta3`, `pregunta4`, `pregunta5`, `usuario`, `preguntas`) VALUES
(2, 'pregunta1', 'pregunta2', 'pregunta3', 'pregunta4', 'pregunta5', 2, 1),
(3, 'a', 'b', 'c', 'd', 'e', 4, 1),
(4, 'a', 'b', 'c', 'd', 'snia', 4, 1),
(5, 'Me gusta', 'Mas cosas', 'Si', 'Si', 'Frefcuentemente', 0, 0),
(6, '1junio', '2junio', '3junio', '4junio', '5junio', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`nIdPersonal` int(6) NOT NULL,
  `nCveUsu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sPwd` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`nIdPersonal`, `nCveUsu`, `sPwd`, `correo`) VALUES
(1, 'mondongo', 'abc123', 'correo@hotmail.com'),
(2, 'a', 'a', 'a'),
(3, 'B', 'B', 'B'),
(4, 'water', 'hotdog', 'hotdogwater@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
 ADD PRIMARY KEY (`Id_e`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`nIdPersonal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
MODIFY `Id_e` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `nIdPersonal` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
