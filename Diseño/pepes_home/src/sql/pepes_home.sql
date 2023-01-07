-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2023 a las 16:52:03
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

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
-- Estructura de tabla para la tabla `carta`
--

CREATE TABLE `carta` (
  `id_plato` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `ingredientes` varchar(255) NOT NULL,
  `cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carta`
--

INSERT INTO `carta` (`id_plato`, `nombre`, `ingredientes`, `cat`) VALUES
(1, 'Caracoles picantes', 'Caracoles, guindillas', 1),
(2, 'Chuleton', 'Chuleton, sal, aceite, cebolla, pimienta ,ingrdiente secreo', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `contraseña` varchar(6) NOT NULL,
  `fecha_nacimiento` datetime NOT NULL,
  `email` varchar(40) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `rol` enum('Admin','User') NOT NULL,
  `puntos` varchar(5) NOT NULL
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
