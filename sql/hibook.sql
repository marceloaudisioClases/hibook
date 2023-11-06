-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2023 a las 18:27:55
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hibook`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `comentario_id` bigint(20) UNSIGNED NOT NULL,
  `valoracion_id` bigint(20) UNSIGNED NOT NULL,
  `detalles` text NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticas`
--

CREATE TABLE `estadisticas` (
  `estadistica_id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `color` text NOT NULL,
  `icono` text NOT NULL,
  `descripcion` text NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estadisticas`
--

INSERT INTO `estadisticas` (`estadistica_id`, `nombre`, `color`, `icono`, `descripcion`, `estado`) VALUES
(1, 'Amabilidad', '', 'assets/caracteristicas_img/amabilidad.png', '', 1),
(2, 'Trabajo en equipo', '', 'assets/caracteristicas_img/trabajo_en_equipo.png', '', 1),
(3, 'Perseverancia', '', 'assets/caracteristicas_img/perseverancia.png', '', 1),
(4, 'Liderazgo', '', 'assets/caracteristicas_img/liderazgo.png', '', 1),
(5, 'Responsabilidad', '', 'assets/caracteristicas_img/responsabilidad.png', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `perfil_id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `detalles` text NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `rol_id` tinyint(4) NOT NULL,
  `nombre` text NOT NULL,
  `predeterminado` tinyint(4) NOT NULL DEFAULT 0,
  `estado` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`rol_id`, `nombre`, `predeterminado`, `estado`) VALUES
(1, 'usuarios', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `usuario` text NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `rol_id` tinyint(4) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario`, `nombre`, `apellido`, `email`, `password`, `rol_id`, `estado`, `avatar`) VALUES
(1, 'matias', 'Matias', 'Lupo', 'matiezelupo@gmail.com', '1234', 1, 1, ''),
(2, 'agus', 'Agustin', 'Luparini', 'agus@gmail.com', '1234', 1, 1, ''),
(3, 'ivan', 'Ivan', 'Valeff', 'ivaleff@gmail.com', '1234', 1, 1, ''),
(4, 'ezequiel', 'Ezequiel', 'De La Fuente', 'ezequieldlf@gmail.com', '1234', 1, 1, ''),
(5, 'franco', 'Franco', 'Spatocco', 'fspatocco@gmail.com', '1234', 1, 1, ''),
(6, 'belu', 'Belen', 'Giri', 'belen@gmail.com', '1234', 1, 1, ''),
(7, 'abril', 'Abril', 'Aladro', 'abril@gmail.com', '1234', 1, 1, ''),
(8, 'fer', 'Fernando', 'Cosentino', 'feracosentino@gmail.com', 'fer', 1, 1, 'https://th.bing.com/th/id/OIP.sTOP1cv95nOdxPTH-KLwsAHaHa?pid=ImgDet&rs=1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoraciones`
--

CREATE TABLE `valoraciones` (
  `valoracion_id` bigint(20) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `estadistica_id` int(11) NOT NULL,
  `valoracion` tinyint(4) NOT NULL,
  `valorador_id` int(10) UNSIGNED NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `estado` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `valoraciones`
--

INSERT INTO `valoraciones` (`valoracion_id`, `usuario_id`, `estadistica_id`, `valoracion`, `valorador_id`, `fecha`, `estado`) VALUES
(1, 1, 1, 4, 2, '2023-11-02 21:38:59', 1),
(2, 1, 2, 3, 3, '2023-11-02 21:38:59', 1);
(1, 2, 1, 5, 1, '2023-11-02 15:18:49', 1),
(2, 2, 1, 4, 5, '2023-11-02 16:01:31', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  ADD PRIMARY KEY (`estadistica_id`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`perfil_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Indices de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  ADD PRIMARY KEY (`valoracion_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  MODIFY `estadistica_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `perfil_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `rol_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `valoraciones`
--
ALTER TABLE `valoraciones`
  MODIFY `valoracion_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
