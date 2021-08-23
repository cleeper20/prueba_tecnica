-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-08-2021 a las 21:17:43
-- Versión del servidor: 5.7.24
-- Versión de PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `matricula`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `identidad` varchar(13) NOT NULL,
  `primer_nombre` varchar(45) NOT NULL,
  `segundo_nombre` varchar(45) NOT NULL,
  `primer_apellido` varchar(45) NOT NULL,
  `segundo_apellido` varchar(45) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `borrado` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sexo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `identidad`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `fecha_nacimiento`, `fecha_ingreso`, `borrado`, `created_at`, `updated_at`, `sexo_id`) VALUES
(2, '0801199124888', 'juan', 'fernando', 'aviles', 'guevara', '2021-08-27', '2021-08-21', 1, '2021-08-20 23:13:31', '2021-08-21 03:11:31', 1),
(3, '0801199612847', 'luis', 'fernando', 'antonio', 'gonzales', '2021-08-21', '2021-08-19', 1, '2021-08-20 23:17:21', '2021-08-21 02:04:42', 1),
(4, '0808199612847', 'juan', 'perez', 'ordoñes', 'garcia', '2021-08-20', '2021-08-20', 1, '2021-08-21 01:25:06', '2021-08-21 02:19:50', 1),
(5, '0144199823568', 'antonio', 'andrade', 'garza', 'toribio', '2021-08-19', '2021-08-19', 1, '2021-08-21 01:28:05', '2021-08-21 03:11:38', 1),
(6, '0881199124888', 'antonio', 'tulio', 'menchaca', 'rofriguez', '2021-08-20', '2021-08-20', 0, '2021-08-21 01:29:50', '2021-08-21 01:29:50', 1),
(7, '0871199612847', 'alexis', 'maradiaga', 'tigre', 'papagallo', '2021-08-20', '2021-08-20', 0, '2021-08-21 01:31:13', '2021-08-21 01:31:13', 1),
(8, '0827199700175', 'antonio', 'Luis', 'garza', 'aviles', '2021-08-20', '2021-08-20', 0, '2021-08-21 02:19:29', '2021-08-21 02:19:29', 1),
(10, '0807199124888', 'antonio', 'Luis', 'garza', 'Guevara', '2021-08-20', '2021-08-20', 0, '2021-08-21 03:11:17', '2021-08-21 03:11:17', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnogrado`
--

CREATE TABLE `alumnogrado` (
  `alumno_id` int(11) NOT NULL,
  `clase_id` int(11) NOT NULL,
  `grado_actual` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnogrado`
--

INSERT INTO `alumnogrado` (`alumno_id`, `clase_id`, `grado_actual`, `created_at`, `updated_at`) VALUES
(2, 3, 0, '2021-08-20 17:43:13', NULL),
(2, 7, 1, '2021-08-20 23:13:31', '2021-08-20 23:13:31'),
(3, 6, 1, '2021-08-20 23:17:21', '2021-08-20 23:17:21'),
(4, 4, 1, '2021-08-21 01:25:06', '2021-08-21 01:25:06'),
(5, 4, 1, '2021-08-21 01:28:05', '2021-08-21 01:28:05'),
(6, 1, 1, '2021-08-21 01:29:50', '2021-08-21 01:29:50'),
(7, 5, 1, '2021-08-21 01:31:13', '2021-08-21 01:31:13'),
(8, 3, 1, '2021-08-21 02:19:29', '2021-08-21 02:19:29'),
(10, 5, 1, '2021-08-21 03:11:17', '2021-08-21 03:11:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'primer grado', '2021-08-20 15:33:14', NULL),
(2, 'segundo grado', '2021-08-20 15:33:14', NULL),
(3, 'tercer grado', '2021-08-20 15:33:54', NULL),
(4, 'cuarto grado', '2021-08-20 15:33:54', NULL),
(5, 'quinto grado', '2021-08-20 15:34:16', NULL),
(6, 'sexto grado', '2021-08-20 15:34:16', NULL),
(7, 'séptimo grado', '2021-08-20 17:13:10', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id` int(11) NOT NULL,
  `sexo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id`, `sexo`) VALUES
(1, 'masculino'),
(2, 'femenino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `identidad_UNIQUE` (`identidad`),
  ADD KEY `fk_alumno_sexo_idx` (`sexo_id`);

--
-- Indices de la tabla `alumnogrado`
--
ALTER TABLE `alumnogrado`
  ADD PRIMARY KEY (`alumno_id`,`clase_id`),
  ADD KEY `fk_alumno_has_clase_clase1_idx` (`clase_id`),
  ADD KEY `fk_alumno_has_clase_alumno1_idx` (`alumno_id`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `fk_alumno_sexo` FOREIGN KEY (`sexo_id`) REFERENCES `sexo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `alumnogrado`
--
ALTER TABLE `alumnogrado`
  ADD CONSTRAINT `fk_alumno_has_clase_alumno1` FOREIGN KEY (`alumno_id`) REFERENCES `alumno` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_alumno_has_clase_clase1` FOREIGN KEY (`clase_id`) REFERENCES `grado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
