-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 26-05-2026 a las 05:13:19
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `avisatec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `usuario_id` int(11) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descripcion`, `fecha`, `usuario_id`, `autor`, `imagen`) VALUES
(1, 'Noticia1', 'Noticia 1 kkk', '2026-05-25 01:08:05', NULL, NULL, NULL),
(2, 'Noticia de Prueba', 'Esta es una noticia de prueba', '2026-05-25 04:40:27', NULL, NULL, NULL),
(3, 'Lobos', '     Lobos   ', '2026-05-25 05:16:19', NULL, NULL, ''),
(4, 'Lobos', 'Se regala furret, está bonito', '2026-05-25 05:16:38', NULL, NULL, 'furret_scaled_4x_pngcrushed.png'),
(5, 'Noticia1', '        a', '2026-05-25 18:27:43', NULL, NULL, 'Bowser lindo.gif'),
(6, 'Noticia6', '       ñ ', '2026-05-26 00:15:22', NULL, NULL, '0cloqoxutgk61-removebg-preview.png'),
(7, 'Noticia#', ' aaa', '2026-05-26 01:22:48', NULL, NULL, 'furret_scaled_4x_pngcrushed.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `rol` varchar(50) DEFAULT NULL,
  `asociacion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `password`, `rol`, `asociacion`) VALUES
(1, 'lobo1@gmail.com', '$2y$10$a.jDWbPz7IMKUOJr5bZxGe1A5QWYtVQ4bVEvuwDaVMLfkd8zc9N2C', 'administrador', 'computacion'),
(2, 'a@gmail.com', '$2y$10$nkbQMovNHI/sbI800YqSce3FRIltRwmDghciejem6yYewACltjJF2', NULL, 'materiales'),
(3, 'b@gmail.com', '$2y$10$7k9Sxvsunnz8eUyS2/BrSu8R9VNGOo.vQ0NGMVETckadWi2e68PNW', NULL, 'computacion'),
(4, 'c@gmail.com', '$2y$10$4lRhV1CgJ/tmOrwoRWrgzORSS1HVNxSxxCK6iKEgz7IyOIqfhgLla', NULL, 'computacion'),
(9, 'lobo3@gmail.com', '$2y$10$6dN9msroXdaCng2UfzfR3OoynS6jPwIYSVUFmgssE4ISHoNTGEvtW', 'estudiante', 'computacion'),
(10, 'f@gmail.com', '$2y$10$8uF8FbQeXqIwBML.xhDJCu/5yUaGBMscecwk7cljRsQsaLaCDn.9S', 'estudiante', 'materiales'),
(11, 'estudiante@gmail.com', '$2y$10$AKOoW1shmtOpWPExORPteetobzCvu/jiiQBWKhIml861ZiVnUmflW', 'estudiante', 'computacion'),
(12, 'administracion@gmail.com', '$2y$10$qCG46NTZzu4MIfXgCAXt8O70vOi./GR5GB7JtA4lGXY5BBf7idmfi', 'estudiante', 'computacion'),
(13, 'h@gmail.com', '$2y$10$v5nxHgWDijVXkvMWUYTwnOdIUiCDMkE1UIq4WB7eMa64X80SkoInW', 'administrador', 'computacion');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
