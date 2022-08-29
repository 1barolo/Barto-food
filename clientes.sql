-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2022 a las 20:30:56
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reserva_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `nombre` int(30) NOT NULL,
  `apellido` int(30) NOT NULL,
  `comensales` int(10) NOT NULL,
  `horario` time DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `correo_electronico`, `nombre`, `apellido`, `comensales`, `horario`, `fecha`) VALUES
(7, 'agustinbarolo@gmail.com', 0, 0, 1, '12:12:00', '0001-05-12'),
(8, 'agustinbarolo@gmail.com', 0, 0, 1, '12:12:00', '0001-05-12'),
(9, 'agustinbarolo@gmail.com', 0, 0, 1, '12:12:00', '0001-05-12'),
(10, 'agustinbarolo@gmail.com', 0, 0, 1, '12:12:00', '0001-05-12'),
(11, 'agustinbarolo@gmail.com', 0, 0, 1, '12:12:00', '0001-05-12'),
(12, 'agustinbarolo@gmail.com', 0, 0, 1, '12:12:00', '0001-05-12'),
(13, 'agustinbarolo@gmail.com', 0, 0, 1, '12:12:00', '0001-05-12'),
(14, 'agustinbarolo@gmail.com', 0, 0, 1, '12:12:00', '0001-05-12'),
(15, 'agustinbarolo@gmail.com', 0, 0, 1, '12:12:00', '0001-05-12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
