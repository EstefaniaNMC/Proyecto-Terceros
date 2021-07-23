-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-07-2021 a las 19:01:00
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbo.formulario`
--
CREATE DATABASE IF NOT EXISTS `dbo.formulario` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `dbo.formulario`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `idSedes` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Sede` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Direccion` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Telefono` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`idSedes`, `Nombre`, `Sede`, `Direccion`, `Telefono`) VALUES
(1, 'Prueba', 'Iberia', 'Carrera 19', '3187904668'),
(2, 'Prueba2', 'San Carlos', 'Carrera 15', '6985632');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl.estado`
--

CREATE TABLE `tbl.estado` (
  `id_estado` int(11) NOT NULL,
  `Activo` tinyint(1) NOT NULL,
  `Inactivo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl.estado`
--

INSERT INTO `tbl.estado` (`id_estado`, `Activo`, `Inactivo`) VALUES
(1, 1, 0),
(2, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl.personajuridica`
--

CREATE TABLE `tbl.personajuridica` (
  `idPersonaJuridica` int(11) NOT NULL,
  `Razon_Social` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Nit` bigint(10) NOT NULL,
  `Telefono` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Correo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Direccion` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Sede` int(11) NOT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl.personajuridica`
--

INSERT INTO `tbl.personajuridica` (`idPersonaJuridica`, `Razon_Social`, `Nit`, `Telefono`, `Correo`, `Direccion`, `Sede`, `Estado`) VALUES
(4, 'empresa', 1015412054, '32155154', 'camilope89@outlook.com', 'Carrera 19', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl.personanatural`
--

CREATE TABLE `tbl.personanatural` (
  `idPersonaNatural` int(11) NOT NULL,
  `Nombres` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Apellidos` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Identificacion` int(10) NOT NULL,
  `Telefono` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Correo` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Direccion` varchar(80) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Sede` int(11) NOT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl.tipoidentificacion`
--

CREATE TABLE `tbl.tipoidentificacion` (
  `id_tipo` int(11) NOT NULL,
  `CC` varchar(11) COLLATE utf8mb4_spanish_ci NOT NULL,
  `CE` varchar(11) COLLATE utf8mb4_spanish_ci NOT NULL,
  `TE` varchar(11) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`idSedes`);

--
-- Indices de la tabla `tbl.estado`
--
ALTER TABLE `tbl.estado`
  ADD PRIMARY KEY (`id_estado`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `tbl.personajuridica`
--
ALTER TABLE `tbl.personajuridica`
  ADD PRIMARY KEY (`idPersonaJuridica`),
  ADD KEY `sede` (`Sede`),
  ADD KEY `Estado` (`Estado`);

--
-- Indices de la tabla `tbl.personanatural`
--
ALTER TABLE `tbl.personanatural`
  ADD PRIMARY KEY (`idPersonaNatural`),
  ADD KEY `Identificacion` (`Identificacion`),
  ADD KEY `sede` (`Sede`),
  ADD KEY `Estado` (`Estado`);

--
-- Indices de la tabla `tbl.tipoidentificacion`
--
ALTER TABLE `tbl.tipoidentificacion`
  ADD PRIMARY KEY (`id_tipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `idSedes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl.estado`
--
ALTER TABLE `tbl.estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl.personajuridica`
--
ALTER TABLE `tbl.personajuridica`
  MODIFY `idPersonaJuridica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl.personanatural`
--
ALTER TABLE `tbl.personanatural`
  MODIFY `idPersonaNatural` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl.tipoidentificacion`
--
ALTER TABLE `tbl.tipoidentificacion`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl.personajuridica`
--
ALTER TABLE `tbl.personajuridica`
  ADD CONSTRAINT `tbl.personajuridica_ibfk_1` FOREIGN KEY (`sede`) REFERENCES `sedes` (`idSedes`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl.personajuridica_ibfk_2` FOREIGN KEY (`Estado`) REFERENCES `tbl.estado` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl.personajuridica_ibfk_3` FOREIGN KEY (`Sede`) REFERENCES `sedes` (`idSedes`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl.personanatural`
--
ALTER TABLE `tbl.personanatural`
  ADD CONSTRAINT `tbl.personanatural_ibfk_1` FOREIGN KEY (`Identificacion`) REFERENCES `tbl.tipoidentificacion` (`id_tipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl.personanatural_ibfk_2` FOREIGN KEY (`sede`) REFERENCES `sedes` (`idSedes`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl.personanatural_ibfk_3` FOREIGN KEY (`Estado`) REFERENCES `tbl.estado` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl.personanatural_ibfk_4` FOREIGN KEY (`Sede`) REFERENCES `sedes` (`idSedes`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
