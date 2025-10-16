-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2025 a las 04:33:05
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
-- Base de datos: `velox`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `usuario` varchar(25) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `cod_celular` int(4) DEFAULT NULL,
  `celular` int(7) DEFAULT NULL,
  `contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `usuario`, `correo`, `cod_celular`, `celular`, `contraseña`) VALUES
(1, 'Keiver', 'keiver@gmail.com', 412, 3125655, '1234'),
(2, 'Jesus', 'jesusamaya@gmail.com', 412, 6666666, '$2y$10$vdBK8A63RuzBT8bFNhVgQ.95dikvsWdBsZi7LWpE243XMYWezd7FO'),
(4, 'Jesus Ramos', 'Ramos@gmail.com', 412, 1651651, '$2y$10$XHqP6gbgECpmHlZHmrTWzO1nu9hdimbBRjhpZUYpiMCbkCiaAbHUO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
