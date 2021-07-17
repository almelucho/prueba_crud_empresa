-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 17-07-2021 a las 05:44:51
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `computacion1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `idempresa` int(11) NOT NULL,
  `razon_social` varchar(255) NOT NULL,
  `rif` int(30) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idempresa`, `razon_social`, `rif`, `fecha_creacion`, `direccion`, `telefono`) VALUES
(17, 'Taquion INC', 15504060, '1984-01-30', 'Caracas', 1477888),
(19, 'Rootech', 15501, '2017-01-31', 'Carapita', 4125355),
(20, 'Rasrafari', 15554, '2020-11-18', 'catia', 412555),
(21, 'otra', 15555, '1974-01-28', 'antinan', 412555),
(22, 'doblea', 155040, '2019-03-13', 'catia', 155040),
(30, '123', 123123, '2021-07-12', 'afsadf', 2124719479),
(31, 'SAD', 10, '2021-07-12', 'DSFSDAF', 2124719479),
(37, 'dfsdf', 155040, '2021-07-21', 'sfsd', 2128700791),
(38, 'ewr', 111111111, '2021-07-01', 'sdfdas', 2124719479);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idempresa`),
  ADD UNIQUE KEY `idpersona` (`idempresa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idempresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
