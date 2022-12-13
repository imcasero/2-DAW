-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2022 a las 11:49:20
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pepes_home`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `nombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `contraseña` varchar(6) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_nacimiento` datetime NOT NULL,
  `email` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `rol` enum('Admin','User') COLLATE utf8_spanish2_ci NOT NULL,
  `puntos` varchar(5) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`nombre`, `apellidos`, `contraseña`, `fecha_nacimiento`, `email`, `direccion`, `telefono`, `rol`, `puntos`) VALUES
('Diego', 'Casero Martin', '111111', '2001-06-06 00:00:00', 'diegocasero@gmail.com', 'C/Jeronima Llorente ', '666666666', 'Admin', '100'),
('Diego', 'Casero Martin', '111111', '2001-06-06 00:00:00', 'diegocasero1@gmail.com', 'C/Jeronima Llorente ', '666666666', 'User', '100');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
