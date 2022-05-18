-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-05-2022 a las 04:42:48
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdcartelera`
--
CREATE DATABASE IF NOT EXISTS `bdcartelera` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `bdcartelera`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `addpeliculas`
--

CREATE TABLE `addpeliculas` (
  `id` int(5) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `horario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `addpeliculas`
--

INSERT INTO `addpeliculas` (`id`, `titulo`, `descripcion`, `horario`) VALUES
(3, 'Batman', 'Con solo unos pocos aliados de confianza -Alfred Pennyworth y el teniente James Gordon- entre la corrupta red de funcionarios y personajes de alto nivel de la ciudad, el solitario justiciero se ha establecido como la única encarnación de la venganza entre sus conciudadanos.', '1:00 pm a 2:15 pm'),
(4, 'Sonic 2', 'Sonic une fuerzas con Tails para evitar que el Dr. Robotnik y Knuckles encuentren una poderosa esmeralda que tiene el poder de crear y destruir civilizaciones. ', '9:00 pm a 10:30 pm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(5) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `password`) VALUES
(1, 'Gerardo', 'gera.99@hotmail.com', '123q');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `addpeliculas`
--
ALTER TABLE `addpeliculas`
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
-- AUTO_INCREMENT de la tabla `addpeliculas`
--
ALTER TABLE `addpeliculas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
