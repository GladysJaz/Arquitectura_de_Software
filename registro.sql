-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2023 a las 03:33:51
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(9) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `nom_evento` varchar(50) NOT NULL,
  `espacio` varchar(50) NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `hora` time NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha_reg` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `email`, `tel`, `nom_evento`, `espacio`, `fecha_solicitud`, `hora`, `descripcion`, `fecha_reg`) VALUES
(11, 'Gladys Jazmin Sanchez Tapia', 'gladys.sanchez@estudiante.uacm.edu.mx', '7121162601', 'Cultura en la UACM', 'Plaza del estudiante', '2023-10-10', '04:23:00', 'Se llevara a cabo un evento cultural dedicado a Van goh', '10/10/23'),
(17, 'Kirara', 'Kirara@estudiante.uacm.edu.mx', '5567890823', 'uacm', 'Plaza del estudiante', '2023-10-17', '03:07:09', 'Se llevara a cabo un evento cultural dedicado a Van goh', '17/10/23'),
(18, 'gladys', 'glasdic05@gmail.com', '7121162601', 'x', 'xespacio', '2023-11-29', '04:50:20', 'dadadad', '29/11/2023'),
(19, 'gladys S', 'gla@gmail.com', '5566778899', 'cultura', 'plaza', '2023-11-29', '19:41:51', 'fsdf', '29/11/2023'),
(20, 'glas', 'glas@gmail.com', '2233445566', 'kfskf', 'fñlskñlfks', '2023-11-29', '19:44:39', 'asdasd', '29/11/2023'),
(21, 'gladys', 'glas@gmail.com', '7121162601', 'cultura', 'plaza', '2023-11-29', '20:17:01', 'dadads', '29/11/2023'),
(22, 'Gladys', 'jazmglas95@gmail.com', '7121162601', 'Gladys', 'dgdgdgdg', '2023-11-29', '22:10:43', 'prueba', '29/11/23'),
(23, 'Gladys', 'jazmglas95@gmail.com', '7121162601', 'Gladys', 'Plaza del estudiante', '2023-11-30', '03:48:29', 'xvxvxv', '30/11/2023');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
